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
        $forms = Form::whereIn('status', array_keys(Form::FORM_STATUSES));

        if (isset($type)) {
            $forms = $forms->where('status', array_search(ucwords($type), Form::FORM_STATUSES));
        }

        $forms = $forms->get();

        $forms = $forms->map(function ($item) {
            $item->new_profiles = 0;
            $item->voided_profiles = 0;
            $item->transferred_profiles = 0;
            foreach ($item->profiles as $profile) {
                if ($profile->getNewProfile()) {
                    $item->new_profiles++;
                }
                if ($profile->getVoidedProfile()) {
                    $item->voided_profiles++;
                }
                if ($profile->getTransferedProfile()) {
                    $item->transfered_profiles++;
                }
            }

            return $item;
        });
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
            'header' => 'string|nullable',
            'pdf_url' => 'url|nullable',
            'id_project' => 'required|integer',
            'id_referral' => 'required|integer',
            'thumbnail' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ];

        $this->validate($request, $rules);

        if($file = $request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalName();
            $thumb = Image::make($file->getRealPath())->resize(204, 236, function ($constraint) {
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
            'form_unique_part' => sha1(str_random(60)),
            'thumbnail_url' => $thumb_link ?? '/uploads/thumbnails/default.jpg'
        ]);

        return redirect('/apply-form-88/dashboard')->with('status', 'Form succesfully created!');

    }

    public function edit(Form $form, $type = null)
    {
        return view('admin.forms.edit', compact('form', 'type'));
    }

    public function update(Request $request, Form $form, $type = null)
    {
        $rules = [
            'name' => 'required|string',
            'header' => 'string|nullable',
            'pdf_url' => 'url|nullable',
            'id_project' => 'required|integer',
            'id_referral' => 'required|integer',
            'thumbnail' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ];

        $this->validate($request, $rules);

        if($file = $request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalName();
            $thumb = Image::make($file->getRealPath())->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            $destinationPath = public_path('/uploads/thumbnails/');
            $thumb->save($destinationPath.'/thumb_'.$extension);
            $thumb_link = '/uploads/thumbnails/thumb_' . $extension;
        }


            $form->title = $request->name;
            if ($form->header_html != $request->header) {
                $form->header_html = e($request->header);
            }
            $form->pdf_url = $request->pdf_url;
            $form->project_id = $request->id_project;
            $form->referral_id = $request->id_referral;
            if (isset($thumb_link)) {
                $form->thumbnail_url = $thumb_link;
            }

            $form->save();

        return redirect()->route('admin.forms', ['type' => $type])->with('status', 'Form with title ' . $form->title . 'succesfully edited!');
    }

    public function onOff(Form $form, $type = null)
    {
        $form->status = $form->status ? 0 : 1;
        $form->save();

        return redirect()->route('admin.forms', ['type' => $type])->with('status', 'Form with title - '. $form->title . ( $form->status ? ' activated' : ' deactivated'));
    }
}
