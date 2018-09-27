@extends('layouts.app')
@section('title', 'Mail Forwarding: How it Works')
@section('body', 'how-it-works')
@section('img')
    <img src="{{ asset('images/front/how-mail-forwarding-works.jpg') }}" alt="Mail Forwarding: How it WorksТ">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="text-block">
                <p>Lion’s share of our Mail Forwarding subscribers are overseas clients. This service enables them to
                    shop and receive order from websites and retailers who wouldn’t otherwise ship to their country of
                    residence. Our service allows them to shop with freedom and unlock U.S.-exclusive deal and sale
                    prices and enjoy free or nominal shipping cost from the seller. Our clients receive their order in
                    one of our provided addresses and then we forward the package. Our shipping rates happen to be one
                    of the lowest you’ll find; hence the savings are substantial.</p>
                <p>We invite you to check the service and pricing offered by some of our competitors as we are quite
                    confident that you’ll find our service to be more comprehensive than anyone else and most
                    importantly, our price is lower than the lowest price you will find – guaranteed.</p>
                <p>You are more than welcome to share the address that we provide with anyone you want as long as you
                    don’t abuse our system. We do not restrict how many users can receive their mails, packages or
                    orders in any given address.</p>
                <p>Our mail forwarding service will free up your valuable time and we’ll act as a satellite mail room on
                    your behalf. You can invest your time and energy at what you do best.</p>
                <p>All our clients who subscribe to our Mail Forwarding service are required to complete the USPS Form
                    1583 which essentially allows us to act on their behalf as registered mail agent. Here’s a link to
                    the form: <a href="https://about.usps.com/forms/ps1583.pdf">https://about.usps.com/forms/ps1583.pdf</a>. Hard copies of Form 1583 can be obtained from any
                    local USPS location.</p>
                <p>Also, please be advised that your payment method must match your profile in order for us to act as
                    your mail agent. In other words, if your billing and original shipping address don’t match – we
                    won’t be able to extend our service to you.</p>

            </div>
            <div class="text-block">
                <h2>RECEIVING</h2>
                <p>Our expert team members will receive your incoming mail pieces or packages and scan them promptly so
                    you know that we have received your package. Then we inspect your package for any damages and
                    photograph your package and upload those in your portal so you can see your package almost
                    instantaneously. If any damages were discovered, we will report it immediately so you can decide the
                    next step.</p>
                <p>If you have existing protocols in place for damaged shipment, this will expedite the corrective steps
                    we take. You can choose to forward packages on a case-by-case basis or you can have prior
                    preferences set where we can either consolidate packages to lower cost or forward them immediately
                    for faster processing.</p>

            </div>
            <div class="text-block">
                <h2>FORWARDING</h2>
                <p>Clients receive notification when their package is received and they can see photographs of their
                    package. If there is no set protocol for incoming packages, we’ll wait till we receive instruction
                    from the client. However, it’s possible to set protocols for forwarding address for faster
                    processing. You can change these protocols any time and with no limits as to how many times you make
                    changes. We try to remain as flexible and accommodating as possible.</p>
                <p>You are responsible to fill any customs form in the receiving country for declaration, duties, excise
                    or tax purposes. We cannot fill these forms for you but if you need assistance, we’ll be more than
                    happy to help in any way we can.</p>

            </div>
        </div>
    </div>
</div>

<!--Reviews-->

@include('front.parts.reviews')

<!--End Reviews-->
@endsection