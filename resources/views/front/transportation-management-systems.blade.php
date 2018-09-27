@extends('layouts.app')
@section('title', 'Transportation Management Systems')
@section('body', 'transportation-management-systems')
@section('img')
    <img src="{{ asset('images/front/transportation-management-systems.jpg') }}" alt="Transportation Management Systems">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>
                        Innovative solution is one of the cornerstones of our business. Transportation Management System
                        or TMS is one of many innovations we deploy to revolutionize logistics. TMS permits us to
                        communicate with carriers in real time, check status of both inbound and outbound packages and
                        more. We can customize and re-schedule delivery if needed. In short, we utilize TMS to
                        streamline our operations on a daily basis.
                    </p>
                </div>
                <div class="text-block">
                    <h2>SCHEDULING</h2>
                    <p>
                        TMS helps us communicate with the carrier and easily reschedule delivery. We use it when
                        customers are away and would like to schedule delivery for a specific day/time. We also utilize
                        this feature when we’re having an exceptionally busy day. We delay our delivery so we can load
                        balance and better utilize our resources. We move delivery away from busy days, and reschedule
                        them on lighter days.
                    </p>
                </div>
                <div class="text-block">
                    <h2>INSPECTION</h2>
                    <p>
                        We offer comprehensive inspection services to clients who don’t like any surprises. We use both
                        technology and our highly trained staff to make sure our inventory is in top notch condition.
                        Periodical physical checks with continuous automatic monitoring help us detect anything out of
                        the ordinary fast and anything of concern get addressed immediately before it can become a huge
                        headache.
                    </p>
                </div>
                <div class="text-block">
                    <h2>FLEXIBILITY</h2>
                    <p>
                        We remain agile and flexible so we can accommodate our clients as much as possible. Our system
                        is flexible and allows a fair amount of customization hence our clients enjoy a seamless
                        experience even if they are several time zones apart. Pre-loading, drop shipping, package
                        consolidation etc. are few of many flexible services we proudly provide to our clients.
                    </p>
                </div>
                <div class="text-block">
                    <h2>FREIGHT BROKERAGE</h2>
                    <p>
                        Our expert staff can help you unlock unbelievably low rates with freight and mail carriers. As a
                        larger customer, we have a bit of negotiation power that allows us to enjoy better rates that
                        are otherwise not made available to public. We happily pass on these savings to our clients.
                    </p>
                </div>
                <div class="text-block">
                    <h2>SHIPPING NETWORK</h2>
                    <p>
                        We have established a global network of carriers. No matter where you live or how remote your
                        delivery address is, we can work something out to make sure you receive your product. Our
                        shipping network allows us to extend unsurpassed service to our clients, along with flexibility,
                        cost savings and more.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection