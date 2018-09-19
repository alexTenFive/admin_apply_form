<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use App\Models\Admin\State;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($type = null)
    {
        $search_phrase = request('search_phrase');

        $profiles = Profile::whereIn('status_id', array_keys(Profile::PROFILE_STATUSES));

        if (isset($type)) {
            $profiles->where('status_id', array_search(ucwords($type), Profile::PROFILE_STATUSES));
        }

        if(isset($search_phrase)) {
            $profiles->where('full_name' , 'like', '%' . $search_phrase . '%')
                     ->orWhere('email', 'like' , '%' . $search_phrase . '%');
        }

        $profiles = $profiles->get();

        return view('admin.profiles.index', compact('profiles', 'type'));
    }

    public function edit(Profile $profile, $type = null)
    {
        $states = State::all();

        return view('admin.profiles.edit', compact('profile', 'type', 'states'));
    }

    public function update(Request $request, Profile $profile, $type = null)
    {
        $rules = [
            'full_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state_id' => 'required|exists:states,id',
            'zip' => 'required|numeric',
            'email' => 'required|email',
            'cell_phone' => ['required', /*'regex:/^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/'*/],
            /*'other_phone' => ['regex:/^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/']*/
        ];

        $this->validate($request, $rules);

        $full_name = str_replace(['"', "'", '`', '&laquo;', '&raquo;'], "", $request->full_name);

        $profile->full_name = $full_name;
        $profile->address = $request->address;
        $profile->email = $request->email;
        $profile->city = $request->city;
        $profile->zip = $request->zip;
        $profile->state_id = $request->state_id;
        $profile->cell_phone = $request->cell_phone;
        $profile->save();

        return redirect()->route('admin.profiles', ['type' => $type])->with('status', 'Profile with ID '. $profile->id . ' successfully updated.');
    }

    public function delete(Profile $profile, $type = null)
    {
        $id = $profile->id;
        $profile->delete();

        return redirect()->route('admin.profiles', ['type' => $type])->with('status', 'Profile with ID '. $id . ' successfully deleted.');
    }
}
