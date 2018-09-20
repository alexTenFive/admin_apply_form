@extends('layouts.app')
@section('title', 'Password Recovery')
@section('body', 'password-recovery')
@section('img')
    <img src="{{ asset('images/front/password-recovery.jpg') }}" alt="Password Recovery">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-block">
                    <form id="pass-recovery" class="form-recovery" action="">
                        <div class="form-group">
                            <input class="form-control req" type="email" placeholder="E-mail">
                            <div class="req-text">The email field is required.</div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 text-center">
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_SITE_KEY') }}"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 text-center">
                                <div class="alert not-empty">
                                    No account found with that email address. Please try again.
                                </div>
                                <div class="alert empty"></div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection