@extends('layouts.app')
@section('title', 'About ' . env('COMPANY_NAME'))
@section('body', 'about-us')
@section('img')
    <img src="{{ asset('images/front/about-us.jpg') }}" alt="About Parsendo">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>{{env('COMPANY_NAME')}} has pioneered the third party shipping industry. We branched out and redefined
                        comprehensive logistic solution and transformed how businesses are conducted today and in the
                        future. If you have a challenge that keeps you up at night, chances are we have already overcome
                        a similar roadblock. Get in touch with us today and see for yourself what we have to offer.</p>
                    <p>We offer a plethora of services that are affordable and quite frankly, as comprehensive as it
                        gets. You can customize your subscription in any way, shape or form you like so you can make the
                        most of your investment.</p>

                </div>
                <div class="text-block">
                    <h2>Innovation Solution to Logistics</h2>
                    <p>
                        Whether you’re trying to overhaul your entire supply chain or you’re trying to improve your
                        business operations, {{env('COMPANY_NAME')}} can help. Our experts will take the time to understand your
                        business operations and will recommend services that you can benefit from.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Solutions Driven by Technology</h2>
                    <p>
                        Our IT and Security departments are always monitoring the system for any unauthorized access and
                        making sure we are running our operations without any interference. Any data breach can be
                        detected within seconds and counter protocols are deployable within minutes.
                    </p>
                </div>
                <div class="text-block">
                    <h2>World-Class Customer Service</h2>
                    <p>We take great pride in the customer service that we provide. We genuinely care about your success
                        and we’ll go out of our way to make sure you’re truly satisfied with your subscription and the
                        service that you’re receiving.</p>
                    <p>You can reach us in a number of ways, including phone, fax, email and online chat. While we
                        encourage you to utilize our online chat – feel free to use any option that works best for
                        you.</p>

                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection