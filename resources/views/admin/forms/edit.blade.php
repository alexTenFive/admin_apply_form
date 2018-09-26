@extends('layouts.admin.app')

@section('title', 'Edit Form')

@section('content')
    <div class="form-panel border  col-md-8 offset-md-2 bg-custom">
        <h1 class="text-center py-3">
            Edit Form #{{ $form->id }}
        </h1>
        @if($errors->all())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="row">
            <form action="{{ route('admin.forms.update', ['form' => $form, 'type' => $type]) }}" method="post" data-toggle="validator" novalidate="true" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3" enctype="multipart/form-data">
                @csrf
                {{ method_field('patch') }}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>General Details</h4>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group has-error has-danger">
                        <label for="form-name">Form Name *</label>
                        <input id="form-name" class="form-control" type="text" name="name" value="{{ $form->title }}" required="required">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-header">Form Header</label>
                        <textarea id="form-header" class="form-control" name="header">{!! $form->header_html !!}</textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-name">Description Link</label>
                        <input id="form-name" class="form-control" type="text" name="pdf_url" value="{{ $form->pdf_url }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>Project Details</h4>
                    <hr>
                </div>
                <div class="row px-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="project-id">Project ID *</label>
                            <input id="project-id" class="form-control" type="text" name="id_project" value="{{ $form->project_id }}" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="form-group">
                            <label for="referral-id">Referral ID *</label>
                            <input id="referral-id" class="form-control" type="text" name="id_referral" value="{{ $form->referral_id }}" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>Thumbnail image</h4>
                    <hr>
                </div>
                <div class="form-group mb-3 px-3">
                    <img src="{{ asset($form->thumbnail_url) }}" alt="" class="img-thumbnail rounded d-block float-left">
                    <div class="clearfix"></div>
                    <label for="exampleFormControlFile1">Put thumbnail file here: </label>
                    <input type="file" class="form-control-file" name="thumbnail"  value="{{ url($form->thumbnail_url) }}" id="exampleFormControlFile1">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <button type="submit" class="btn btn-dark btn-block">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection