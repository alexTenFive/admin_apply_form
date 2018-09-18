@extends('layouts.admin.app')

@section('title', 'Edit Form')

@section('content')
    <div class="form-panel border  col-md-8 offset-md-2 bg-custom">
        <h1 class="text-center py-3">
            Edit Profile #{{ $profile->id }}
        </h1>
        @if($errors->all())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="row">
            <form action="{{ route('admin.profiles.update', ['form' => $profile, 'type' => $type]) }}" method="post" data-toggle="validator" novalidate="true" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3" enctype="multipart/form-data">
                @csrf
                {{ method_field('patch') }}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>Contact Details</h4>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group has-error has-danger">
                        <label for="form-name">Full Legal Name *</label>
                        <input id="form-name" class="form-control" type="text" name="fullname" value="{{ $profile->fullname }}" required="required">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>Location Details</h4>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-header">Current Mailing Address *</label>
                        <input id="form-header" type="text" class="form-control" name="address" value="{{ $profile->address }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-name">City</label>
                        <input id="form-name" class="form-control" type="text" name="city" value="{{ $profile->city }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-name">State *</label>
                        <select class="custom-select" id="inputGroupSelect01" name="state_id">
                            @foreach($states as $state)
                                <option value="{{ $state->id }}" @if ($state->id === $profile->state_id) selected @endif>{{ $state->state }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="form-name">ZIP Code *</label>
                        <input id="form-name" class="form-control" type="text" name="zip" value="{{ $profile->zip }}">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>Contact Details</h4>
                    <hr>
                </div>
                <div class="row px-3">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="project-id">Email Address *</label>
                            <input id="project-id" class="form-control" type="email" name="email" value="{{ $profile->email}}" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="form-group">
                            <label for="referral-id">Primary Phone Number *</label>
                            <input id="referral-id" class="form-control" type="tel" name="phone" value="{{ $profile->cell_phone }}" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <h4>Uploaded Files</h4>
                    <hr>
                </div>
                <div class="form-group mb-3 px-3">
                    <link rel="stylesheet" href="" class="btn btn-link">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <button type="submit" class="btn btn-dark btn-block">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection