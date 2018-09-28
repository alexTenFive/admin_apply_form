@extends('layouts.app')
@section('title', 'Consultation')
@section('body', 'consultation')
@section('img')
    <img src="{{ asset('images/front/consultation-services.jpg') }}" alt="Consultation">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <h2>Consultation Services</h2>
                    <p>You can add our consultation services as a standalone subscription or as add on to your existing
                        subscription. We offer real estate consultation services for your new office or business space.
                        We will even help you design your workplace so you can get the most of your real estate. We
                        scout the area you’re interested in, find places that match your wish list and help you
                        negotiate lease or purchase price.</p>
                    <p>If you’re dealing with products that require special handling, disposal, temperature or storage
                        requirements, our experts will meet with your team and if necessary, with the manufacturer to
                        understand the recommended handling instruction so there’s no loss of inventory due to improper
                        handling.</p>
                    <p>Our customers can connect with us in a number of ways, including phone, fax, email and online
                        chat. We highly recommend our clients to use the EDI as this is by far, our most efficient
                        communication tool. Feel free to utilize any other communication channel if EDI is not an option
                        for you.</p>

                </div>
                <div class="text-block">
                    <h2>Freight Brokerage Services</h2>
                    <p>
                        Many of our customers deal with significantly large shipments. If you need help with rather
                        large shipments, we can definitely help. We will help you negotiate unbelievably low rate with
                        freight carrier so you can enjoy the best service at the lowest rate possible.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection