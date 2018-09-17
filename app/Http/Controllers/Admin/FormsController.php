<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Form;
use Intervention\Image\ImageManagerStatic as Image;

class FormsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($type = null)
    {
        $forms = Form::all();
        return view('admin.forms.index', compact('forms', 'type'));
    }

    public function create()
    {
        return view('admin.forms.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'header' => 'required|string',
            'pdf_url' => 'required|url',
            'id_project' => 'required|integer',
            'id_referral' => 'required|integer',
            'thumbnail' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ];

        $this->validate($request, $rules);

        if($file = $request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalName();
            $thumb = Image::make($file->getRealPath())->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $destinationPath = public_path('/uploads/thumbnails/');
            $file->move($destinationPath, $extension);
            $thumb->save($destinationPath.'/thumb_'.$extension);
            $thumb_link = '/uploads/thumbnails/thumb_' . $extension;
        }

        Form::create([
            'title' => $request->name,
            'header_html' => e($request->header),
            'pdf_url' => $request->pdf_url,
            'project_id' => $request->id_project,
            'referral_id' => $request->id_referral,
            'thumbnail_url' => $thumb_link ?? '/uploads/thumbnails/default.jpg'
        ]);

        return redirect('/admin/dashboard')->with('status', 'Form succesfully created!');

    }
}
