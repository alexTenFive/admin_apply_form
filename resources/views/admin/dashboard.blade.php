@extends('layouts.admin.app')

@section('title', 'Overview')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center"><h4>Welcome To The Administration Dashboard</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <div class="circle">
                            <img src="{{ asset('svg/forms.svg') }}">
                        </div>
                        <p><a href="{{ route('admin.forms') }}" class="btn btn-dark">Manage Forms</a></p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <div class="circle">
                            <img src="{{ asset('svg/person.svg') }}">
                        </div>
                        <p><a href="{{ route('admin.profiles') }}" class="btn btn-dark">
                                Manage Profiles
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
