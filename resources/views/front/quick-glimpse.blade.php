@extends('layouts.app')
@section('title', 'Mail Forwarding: Quick Glimpse')

@section('banner')
    Mail Forwarding <br>
    Quick Glimpse
@endsection

@section('body', 'quick-glimpse')

@section('img')
    <img src="{{ asset('images/front/mail-forwarding.jpg') }}" alt="Mail Forwarding: Quick Glimpse">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="text-block">
                <p>Mail Forwarding is one of many vital services that we provide. We have clients from all over the
                    world who enjoy our mail forwarding service. Our mail forwarding service offers dependability with
                    unmatched privacy and the freedom to receive mail no matter where you live.</p>
                <p>It’s very simple to sign up for the mail forwarding service. Create an online account on our website
                    and you’ll receive a U.S. mailing address to receive your package or mail correspondence. You are
                    free to use this address to receive any permissible mail articles or packages with no limits
                    whatsoever.</p>
                <p>Our international customers love this service as it provides them the freedom and flexibility to
                    receive orders and mails without any restriction. Most retailers and websites don’t ship overseas
                    but our mail forwarding service enables them to order online and receive their package right here in
                    the U.S. We’ll receive your shipment on your behalf and forward them to any address of your
                    choice.</p>
                <p>Overseas businesses can also leverage this service to establish a virtual presence in the United
                    States for a minimal subscription fee. This will enable you to unlock new business prospects without
                    the expensive overhead involved with a physical business presence.</p>
                <p>We have clients who have been with us for many years and we also have customers who utilize our
                    service seasonally when they are out on business or vacation. Our subscription plans are flexible
                    and easy to cancel so you’re not tied into any sort of unrealistic long-term commitment.</p>

            </div>
            <div class="text-block">
                <h2>SMAIL MADE SIMPLE</h2>
                <p>
                    With your online portal – you’re always on the know as to what mail pieces are arriving and being
                    forwarded to you. You are in total control and can decide how you like your mail delivered.
                    Consolidated or faster forwarding service – you can customize your plan any way you like, pay your
                    bill online, check incoming packages, adjust settings, change preferences, change or cancel
                    subscription and more right from your online portal.
                </p>
            </div>
            <div class="text-block">
                <h2>UNINTERRUPTED ACCESS</h2>
                <p>
                    You can access your account from anywhere, any time – including holidays. As long as you have an
                    Internet connection, you are in total control of your subscription, plan, and all your mails and
                    packages.
                </p>
            </div>
            <div class="text-block">
                <h2>YOU GOT OPTIONS</h2>
                <p>
                    You can customize your plan any way you like. There’s no time commitment or long-term contract
                    attached to any of our subscription so you can experiment and find the plan that suits you best. Our
                    plan starts at only $19.95 per month.
                </p>
            </div>
            <div class="text-block">
                <h2>PRIVACY YOU CAN COUNT ON</h2>
                <p>Both our IT infrastructure and IT personnel are vigilant against any sort of intrusion that can
                    enable unauthorized access to your information. We are constantly evaluating and monitoring security
                    breaches as they unfold so we can stay on top of any development.</p>
                <p>We deploy the most advanced security protocols coupled with unparalleled cybersecurity that involves
                    both physical security, infrastructure and highly skilled staff to make sure your information is
                    safe with us.</p>

            </div>
        </div>
    </div>
</div>

<!--Reviews-->

@include('front.parts.reviews')

<!--End Reviews-->
@endsection