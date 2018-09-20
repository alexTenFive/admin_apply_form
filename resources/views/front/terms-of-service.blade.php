@extends('layouts.app')
@section('title', 'Terms of Service and Privacy Policy')
@section('body', 'terms-of-service')
@section('img')
    <img src="{{ asset('images/front/terms-of-service.jpg') }}" alt="Terms of Service and Privacy Policy">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <h2>SIMPLE AND EASY</h2>
                    <h3 id="terms" class="text-center">1. Terms</h3>
                    <p>
                        We offer complete discretion and the privacy of our customers is of utmost importance to us. Our IT
                        folks also ensure your data is safe with us by continuously monitoring our system from external
                        intrusion and make necessary steps in case of a data breach. Along with external threat detection
                        system, our facility is well-equipped with cameras, controlled access and more to prevent
                        unauthorized access.
                    </p>
                </div>
                <div class="text-block">
                    <h3 id="policy" class="text-center">2. Use License</h3>
                    <p>
                        We offer complete discretion and the privacy of our customers is of utmost importance to us. Our IT
                        folks also ensure your data is safe with us by continuously monitoring our system from external
                        intrusion and make necessary steps in case of a data breach. Along with external threat detection
                        system, our facility is well-equipped with cameras, controlled access and more to prevent
                        unauthorized access.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection