@extends('layouts.admin.app')

@section('title', 'Add Form')

@section('content')
    <div class="form-panel border  col-md-10 offset-md-1 bg-custom">
        <h1 class="text-center py-3">
            Add Form
        </h1>
        @if($errors->all())
            <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
            </ul>
        @endif
            <div class="row">
                <form action="{{ route('admin.forms.store') }}" method="post" data-toggle="validator" novalidate="true" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                        <h4>General Details</h4>
                        <hr>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group has-error has-danger">
                            <label for="form-name">Form Name *</label>
                            <input id="form-name" class="form-control" type="text" name="name" value="{{ old('name') }}" required="required">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="form-header">Form Header</label>
                            <textarea id="form-header" class="form-control" name="header">{{ old('header') }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="form-name">Description Link</label>
                            <input id="form-name" class="form-control" type="text" name="pdf_url" value="{{ old('pdf_url') }}">
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
                            <input id="project-id" class="form-control" type="text" name="id_project" value="{{ old('id_project') }}" required="required">
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
                            <div class="form-group">
                                <label for="referral-id">Referral ID *</label>
                                <input id="referral-id" class="form-control" type="text" name="id_referral" value="{{ old('id_referral') }}" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                        <h4>Thumbnail image</h4>
                        <hr>
                    </div>
                    <div class="form-group mb-3 px-3">
                        <label for="exampleFormControlFile1">Put thumbnail file here</label>
                        <input type="file" class="form-control-file" name="thumbnail"  id="exampleFormControlFile1">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <br>
                        <button type="submit" class="btn btn-dark btn-block">Add</button>
                    </div>
                </form>
            </div>
    </div>
@endsection