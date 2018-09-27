@extends('layouts.app')
@section('title', 'Order Fulfillment')
@section('body', 'order-fulfillment')
@section('img')
    <img src="{{ asset('images/front/order-fulfillment.jpg') }}" alt="Order Fulfillment">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>
                        {{env('COMPANY_NAME')}} is humbled to realize that clients have entrusted us with not only their valuable
                        products but also, in many cases, majority of their business operations. Our very existence
                        depends on our clients’ success. We take several precautions to make sure products reach their
                        end destination undamaged.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Air Bags</h2>
                    <p>
                        Blank spaces in any shipment are hazardous. Loads tend to shift while in transit and can easily
                        damage when there’s too much room that allows products to move freely. In order to prevent this
                        from happening to your product, we tightly pack every load with air bags so there’s barely any
                        room for unwanted movement. This added cushioning prevents products from banging into each other
                        and ensures a safe transit.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Registered Film and Shrink Wrapping</h2>
                    <p>
                        Larger loads are shipped on pallets. Shrink wrapping enforces integrity of the pallet and keeps
                        it stable. For irregular sized items and pallets, shrink wrapping is one of the most effective
                        packing techniques. It also prevents small units from falling off and becoming damaged.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Barcode Labelling</h2>
                    <p>
                        Not all barcodes are made equal. Our state of the art barcoding technology allows us to include
                        a plethora of information and we can retrieve all those information with a single, simple scan.
                        In addition to product information, we include special storage instruction, expiration date,
                        tracking and monitoring information so we can always track and monitor a product no matter where
                        it may be at a given time.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Heat Tunnel Processing</h2>
                    <p>
                        The next step up of Shrink Wrapping is Heat Tunnel Wrapping. For larger and awkwardly shaped
                        items where shrink wrapping is not ideal, this technique comes in handy. Heat tunneling allows
                        the wrap to conform to the load no matter how oddly shaped it may be. It also stabilizes the
                        load for shipping. This is one of the most cost effective yet sturdy way to package a load.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection