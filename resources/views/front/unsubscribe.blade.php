@extends('layouts.app')
@section('title', 'unsubscribe')
@section('body', 'unsubscribe')
@section('img')
    <img src="{{ asset('images/front/unsubscribe.jpg') }}" alt="unsubscribe">
@endsection
@section('content')
    <div id="scrollto" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="text-block">
                    <form id="pass-recovery" class="form-recovery" action="">
                        <div class="form-group">
                            <input class="form-control req" type="email" placeholder="E-mail">
                            <div class="req-text">The email field is required.</div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 text-center">
                                <div class="alert not-empty success">
                                    Thank you! Your request has been submitted and email was removed from the database.
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