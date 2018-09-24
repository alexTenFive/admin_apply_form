<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Form;
use App\Models\Admin\State;
use App\Models\Admin\Profile;
use App\Models\Admin\ProfileFiles;
use App\Models\Admin\ProfilePhones;

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
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpg,png,jpeg',
            'files' => 'required',
            'files.*' => 'mimes:doc,pdf,docx,txt'
        ];

        $this->validate($request, $rules);


        $form = Form::where('form_unique_part', $link)->first();
        $first_name = str_replace(['"', "'", '`', '&laquo;', '&raquo;'], "", $request->first_name);
        $last_name = str_replace(['"', "'", '`', '&laquo;', '&raquo;'], "", $request->last_name);
        $full_name = $first_name . ' ' . $last_name;

        $profile_alias = $first_name . $last_name . str_random(5);

        $photo_url = null;
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $extension = $photo->getClientOriginalName();
                $destinationPath = public_path('/uploads/profiles/photos/' . $profile_alias . '/');
                $photo->move($destinationPath, $extension);
                $photo_url = '/uploads/profiles/photos/' . $profile_alias . '/';
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
            'cell_phone' => $request->cell_phone,
            'photo_url' => $photo_url
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $extension = $file->getClientOriginalName();
                $destinationPath = public_path('/uploads/profiles/files/' . $profile_alias . '/');
                $file_name = str_replace(['"', "'", '`', '&laquo;', '&raquo;'], "", $extension);

                $file->move($destinationPath, $file_name);

                $file_path = '/uploads/profiles/files/' . $profile_alias . '/' . $file_name;
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
                'phone' => $request->other_phone
            ]);
        }

        return json_encode([
            'status' => 'success',
        ]);
    }
}
