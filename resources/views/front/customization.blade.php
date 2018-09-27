@extends('layouts.app')
@section('title', 'Customization')
@section('body', 'customization')
@section('img')
    <img src="{{ asset('images/front/customization.jpg') }}" alt="Customization">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>{{env('COMPANY_NAME')}} serves clients from all over the world. Our customers deal with all sorts of products
                        that all have their own set of handling process for safe storage, and transit. We are not just a
                        regular logistics company to get your product from point A to point B. We make sure your product
                        is undamaged and handled to the exact specification that the manufacturer/vendor recommends.</p>
                    <p>Handling a wide variety of products with different sets of handling requirements isn’t simple.
                        Yet, we have a process in place to accomplish just that. This enables us to eliminate inventory
                        loss and serve our clients better. We have temperature controlled unit, special hazardous
                        material handling protocol, expiration date monitoring system and more.</p>
                    <p>You can add other value added services to your subscription plan to take some competitive edge
                        over your competitions.</p>
                    <p>If your product needs assembled, we can help. We offer Assembly Services to clients who need it.
                        Our staff will take out your product from the package and will assemble per manufacturer
                        instruction and inspect them for safety and stability prior to shipping.</p>
                    <p>You can also enjoy our Repackaging Services if your product comes from the vendor in bulk
                        packaging and you need to repackage them for retail sale. We will unpack your load from pallet,
                        case or bulk box and repackage them to your exact specification. We can even create custom
                        barcode so you can have your own tracking/inventory system for easier monitoring.</p>
                    <p>Call us today to find out what options we have to make business a breeze.</p>

                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection