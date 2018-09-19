@extends('layouts.admin.app')

@section('title', 'Transfer Profiles')
@section('content')
    <div class="form-panel border  col-md-8 offset-md-2 bg-custom">
        @if (session('status'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h1 class="text-center py-3">
            Transfer Profiles
        </h1>
            @isset($form)
                <h4 class="text-center"><strong>Form: </strong> {{ $form->title }}</h4>
            @endisset
        @if($errors->all())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="row">
            <form action="{{ route('admin.profiles.transfer', ['form' => $form]) }}" method="post" data-toggle="validator" novalidate="true" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>MySQL Settings</h4>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group has-error has-danger">
                        <label for="form-name">Hostname *</label>
                        <input id="form-name" class="form-control" type="text" name="host" value="{{ $connection_params['host'] }}" required="required">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group has-error has-danger">
                        <label for="form-name">Port *</label>
                        <input id="form-name" class="form-control" type="text" name="port" value="{{ $connection_params['port'] }}" required="required">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-header">Username *</label>
                        <input id="form-header" class="form-control" name="username" value="{{ $connection_params['username'] }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-name">Password *</label>
                        <input id="form-name" class="form-control" type="text" name="password" value="{{ $connection_params['password'] }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="project-id">Database *</label>
                        <input id="project-id" class="form-control" type="text" name="database" value="{{ $connection_params['database'] }}" required="required">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <button type="submit" class="btn btn-dark btn-block">Transfer</button>
                </div>
            </form>
        </div>
    </div>
@endsection