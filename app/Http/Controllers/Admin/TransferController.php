<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Form;
use App\Models\Admin\Profile;
use App\Models\Admin\ProfileFiles;
use App\Models\Admin\ProfilePhones;
use App\Helpers\ExternalDatabaseConnection;
use Illuminate\Support\Facades\Log;


class TransferController extends Controller
{
    public function index($form_id = null)
    {
        $connection = ExternalDatabaseConnection::setConnection();
        $connection_params = config('database.connections.external_db');

        $form = null;
        if (isset($form_id)) {
            $form = Form::find($form_id);
        }

        return view('admin.transfers.index', compact('form', 'connection_params'));
    }

    public function transfer(Request $request, Form $form = null)
    {
        $rules = [
            'host' => 'required|ip',
            'port' => 'required|numeric',
            'username' => 'required|string',
            'password' => 'required',
            'database' => 'required|string'
        ];

        $this->validate($request, $rules);

        // prepare connection params
        $connection_params = $request->all();
        unset($connection_params['_token']);

        // get connection to external DB
        $connection = ExternalDatabaseConnection::setConnection($connection_params);

        $local_profiles = Profile::whereIn('status_id', array_keys(Profile::PROFILE_STATUSES));

        if (isset($form)) {
            $local_profiles = $local_profiles->where('form_id', $form->id);
        }

        $local_profiles = $local_profiles->get();

        $counter = 0;

        foreach ($local_profiles as $local_profile) {

            $query = "select * from profiles";
            $query_where = " where email = ?  OR cell_phone = ?";
            $params = [
                $local_profile->email,
                $local_profile->cell_phone,
            ];
            if (count($local_profile->profile_phones)) {
                $query .= " join profiles_phones ON profiles.id = profiles_phones.profile_id";
                $params[] = $local_profile->profile_phones->map(function ($item) { return $item->phone;})->toArray()[0];
                $query_where .= " OR profiles_phones.phone = ?";
            }

            $query .= $query_where;

            $external_profile = $connection->select($query, $params);
            if (count($external_profile) !== 0) {
                if ($local_profile->status_id != Profile::PROFILE_STATUSES_KEYS['Transfered']) {
                    $local_profile->status_id = Profile::PROFILE_STATUSES_KEYS['Voided'];
                    $local_profile->save();
                }
            } else if (! in_array($local_profile->status_id, [Profile::PROFILE_STATUSES_KEYS['Transfered'], Profile::PROFILE_STATUSES_KEYS['Voided']])) {

                if ($this->transferProfile($connection, $local_profile)) {
                    $counter++;
                    $local_profile->status_id = Profile::PROFILE_STATUSES_KEYS['Transfered'];
                    $local_profile->save();
                }

            }
        }

        return back()->with('status', 'Succesfully transfered ' . $counter . ' profile(s)');
    }

    private function prepareProfileParams($localProfile)
    {
        $local_profile_attributes = $localProfile->getAttributes();

        $profile_params = [];
        $profile_params['project_id'] = $local_profile_attributes['project_id'];
        $profile_params['referral_id'] = $local_profile_attributes['remote_referral_id'];
        $profile_params['status_id'] = $local_profile_attributes['status_id'];
        $profile_params['alias'] = $local_profile_attributes['alias'];
        $profile_params['full_name'] = $local_profile_attributes['full_name'];
        $profile_params['email'] = $local_profile_attributes['email'];
        $profile_params['address'] = $local_profile_attributes['address'];
        $profile_params['city'] = $local_profile_attributes['city'];
        $profile_params['state_id'] = $local_profile_attributes['state_id'];
        $profile_params['zip'] = $local_profile_attributes['zip'];
        $profile_params['photo'] = $local_profile_attributes['photo_url'];
        $profile_params['password'] = $local_profile_attributes['password'];
        $profile_params['comments'] = $local_profile_attributes['comments'];
        $profile_params['cell_phone'] = $local_profile_attributes['cell_phone'];
        $profile_params['phone_checked'] = $local_profile_attributes['phone_checked'];
        $profile_params['date_added'] = $local_profile_attributes['date_added'];
        $profile_params['date_updated'] = $local_profile_attributes['date_updated'];
        $profile_params['empl_agreement'] = $local_profile_attributes['empl_agreement'];
        $profile_params['was_contract'] = $local_profile_attributes['was_contract'];
        $profile_params['archived'] = $local_profile_attributes['archived'];
        $profile_params['interviewpreferred'] = $local_profile_attributes['interviewpreferred'];

        return $profile_params;
    }

    private function transferProfile($connection, $localProfile)
    {
        $profile_params = $this->prepareProfileParams($localProfile);
        try {
            $resp = $connection->table("profiles")->insert($profile_params);
            if ($resp) {
                $external_profile_id = $connection->table("profiles")->select('id')->where('email', $profile_params['email'])->first();
            }
        } catch (\Exception $e) {
            Log::error( date(time()) . ' | Error while profile transferring:' . $e->getMessage());
        }


        $profile_files = ProfileFiles::where('profile_id', $localProfile->id)->get();
        $profile_phones = ProfilePhones::where('profile_id', $localProfile->id)->get();

        try {
            if (count($profile_files)) {
                foreach ($profile_files as $file) {
                    $connection->table("profiles_files")->insert([
                        'profile_id' => $external_profile_id->id,
                        'host_name' => $file->host_name,
                        'file_name' => $file->file_path,
                        'file_real_name' => $file->file_name
                    ]);
                }
            }
        } catch (\Exception $e) {
            Log::error( date(time()) . ' | Error while profiles_files transferring:' . $e->getMessage());
        }

        try {
            if (count($profile_phones)) {
                foreach ($profile_phones as $phone) {
                    $connection->table("profiles_phones")->insert([
                        'profile_id' => $external_profile_id->id,
                        'phone' => $phone->phone,
                    ]);
                }
            }
        } catch (\Exception $e) {
            Log::error( date(time()) . ' | Error while profiles_phones transferring:' . $e->getMessage());
        }

        return true;
    }
}
