@extends('layouts.app')
@section('title', 'Quality Control')
@section('body', 'quality-control')
@section('img')
    <img src="{{ asset('images/front/quality-control.jpg') }}" alt="Quality Control">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>{{env('COMPANY_NAME')}} realizes loss of inventory is one of the worst possible outcomes for any business
                        operation. Each item loss directly results in loss of revenue, poor customer experience,
                        possibly deters return customer, cuts into profit margin, waste of money and time for everyone
                        involved.</p>
                    <p>Therefore we take inventory management seriously. You may say, a bit too seriously. Our
                        cutting-edge inventory management system tells the exact location of any product at any given
                        time. We monitor storage condition and special storage needs on a continuous basis both with our
                        automated system and by our staff.</p>
                    <p>We get notified in real time if anything out of the ordinary is detected so the problem can be
                        addressed immediately. We incorporate product expiration date within our barcode system and get
                        notified when a batch of product is approaching shelf life. We can work on clearing those items
                        faster and make room for new inventory item so you are not stuck with a bunch of expired
                        product.</p>
                    <p>We’ll propose discounted price or sale as necessary so items approaching expiration date don’t
                        become a complete loss. Our staff inspect all incoming packages for damage and promptly report
                        any findings so it can be rectified as quickly as possible.</p>
                    <p>Our unique barcode system accounts for all crucial product lifecycle information including proper
                        storage instruction, expiration date, product information, tracking, routing and more. We can
                        also create custom barcodes for your business if you want to avail that service.</p>
                    <p>Furthermore, we handle fragile and hazardous items. Our team members receive rigorous training on
                        proper handling techniques for a wide variety of products. As a result, we can handle most
                        products that our competitors will refuse to safely handle. If needed, we will meet with product
                        manufacturer to ensure their products are handled as per their instruction for safety of
                        everyone involved.</p>

                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection