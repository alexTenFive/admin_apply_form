<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Form;
use App\Models\Admin\State;
use App\Models\Admin\Profile;
use App\Models\Admin\ProfileFiles;
use App\Models\Admin\ProfilePhones;
use App\Libs\FileUpload;
use Illuminate\Support\Facades\Storage;

class FormsController extends Controller
{
    public function link($link)
    {
        $form = Form::where('form_unique_part', $link)->first();

        if (! isset($form))
        {
            return redirect('/');
        }

        $states = State::all();

        return view('front.forms.apply', compact('form', 'states'));
    }

    public function uploadFile(Request $request)
    {
        $uploader = new FileUpload($request->file('uploadFile'));
        $uploader->allowedExtensions = ['doc', 'pdf', 'docx', 'txt'];
        $uploader->sizeLimit = 5242880;
        $result = $uploader->handleUpload(public_path('/uploads/tmp/files'));

        if (!$result) {
            echo json_encode([
                'success' => false,
                'msg' => $uploader->getErrorMsg()
            ]);
        } else {
            echo json_encode([
                'success' => true,
                'file' => $uploader->getFileName()
            ]);
        }

    }

    public function uploadImage(Request $request)
    {
        $uploader = new FileUpload($request->file('uploadFile'));
        $uploader->allowedExtensions = ['jpg', 'jpeg', 'png'];
        $uploader->sizeLimit = 5242880;
        $result = $uploader->handleUpload(public_path('/uploads/tmp/photos'));

        if (!$result) {
            echo json_encode([
                'success' => false,
                'msg' => $uploader->getErrorMsg()
            ]);
        } else {
            echo json_encode([
                'success' => true,
                'file' => $uploader->getFileName()
            ]);
        }
    }

    public function store(Request $request, $link)
    {
        $rules = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state_id' => 'required|exists:states,id',
            'zip' => 'required|numeric',
            'email' => 'required|email',
            'cell_phone' => ['required', /*'regex:/^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/'*/],
            /*'other_phone' => ['regex:/^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/']*/
            'photos' => 'nullable|string',
            'files_docs' => 'required|string',
        ];

        $this->validate($request, $rules);

        $form = Form::where('form_unique_part', $link)->first();
        $first_name = str_replace(['"', "'", '`', ' ', '&laquo;', '&raquo;'], "", $request->first_name);
        $last_name = str_replace(['"', "'", '`', ' ', '&laquo;', '&raquo;'], "", $request->last_name);
        $full_name = $first_name . ' ' . $last_name;

        $profile_alias = $first_name . $last_name . str_random(5);

        $storage_path = '/uploads/tmp/';
        $photo_url = null;
        if ($request->photos) {
                $photos = explode(', ', substr($request->photos, 0, -1));
                $photo = array_shift($photos);

                $old_photo_path = $storage_path . 'photos/';
                $photo_url = '/uploads/profiles/photos/' . $profile_alias . '/';

                $file = Storage::move($old_photo_path . $photo, $photo_url . $photo);

                if ($file) {
                    $photo_url .= $photo;
                    foreach ($photos as $photo) {

                        Storage::delete($old_photo_path . $photo);
                    }
                }
        }

        $profile = Profile::create([
            'full_name' => $full_name,
            'project_id' => $form->project_id,
            'remote_referral_id' => $form->referral_id,
            'form_id' => $form->id,
            'address' => $request->address,
            'email' => $request->email,
            'city' => $request->city,
            'zip' => $request->zip,
            'state_id' => $request->state_id,
            'alias' => $profile_alias,
            'cell_phone' => preg_replace("/[^0-9]/", "", $request->cell_phone),
            'photo_url' => $photo_url
        ]);


        if ($request->files_docs) {
            $files = explode(', ', substr($request->files_docs, 0, -1));

            $old_file_path = $storage_path . 'files/';
            $file_url = '/uploads/profiles/files/' . $profile_alias . '/';

            foreach ($files as $file) {
                $file_name = $file;
                $file_resp = Storage::move($old_file_path . $file, $file_url . $file);

                if ($file_resp) {
                    Storage::delete($old_file_path . $file_name);
                }

                $file_path = $file_url . $file_name;
                $host_name = url('/');

                ProfileFiles::create([
                    'profile_id' => $profile->id,
                    'host_name' => $host_name,
                    'file_path' => $file_path,
                    'file_name' => $file_name,
                ]);

            }
        }

        if ($request->other_phone) {
            ProfilePhones::create([
                'profile_id' => $profile->id,
                'phone' => preg_replace("/[^0-9]/", "", $request->other_phone)
            ]);
        }

        return json_encode([
            'status' => 'success',
            'msg' => 'Profile succesfully uploaded'
        ]);
    }
}
