<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($type = null)
    {
        $profiles = Profile::whereIn('status_id', array_keys(Profile::PROFILE_STATUSES));

        if (isset($type)) {
            $profiles->where('status_id', array_search(ucwords($type), Profile::PROFILE_STATUSES));
        }

        $profiles = $profiles->get();

        return view('admin.profiles.index', compact('profiles', 'type'));
    }

    public function delete(Profile $profile, $type = null)
    {
        $id = $profile->id;
        $profile->delete();

        return redirect()->route('admin.profiles', ['type' => $type])->with('status', 'Profile with ID '. $id . ' successfully deleted.');
    }
}
