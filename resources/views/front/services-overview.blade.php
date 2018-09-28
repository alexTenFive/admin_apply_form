@extends('layouts.app')
@section('title', 'Overview of Services We Provide')

@section('banner')
    Overview of Services<br>
    We Provide
@endsection

@section('body', 'services-overview')
@section('img')
    <img src="{{ asset('images/front/services-overview.jpg') }}" alt="Overview of Services We Provide">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <h2>Quality Control</h2>
                    <p>
                        We utilize both technology and manpower to monitor our inventory, performance and operation.
                        While we utilize the most advanced, cutting-edge technology there is, we do not completely rely
                        on it. Our highly trained professionals will round periodically to check on inventory. Also, all
                        our automated processes have multiple backups just in case. Comprehensive monitoring with
                        technology is complemented with physical inspection – this is how we ensure an iron clad control
                        over our inventory quality.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Order Fulfillment</h2>
                    <p>
                        Our shipping clerks are the best in the industry. They receive training and use technology that
                        is second to none in the logistics industry. Caring for each shipment, attention to detail and
                        speed of processing all come together to deliver the perfect logistics experience both for you
                        and your customer. Our staff regularly inspect packages for damage and if anything noteworthy is
                        found, they promptly report back to management and you so it can be rectified rather quickly.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Amazon Fulfillment</h2>
                    <p>
                        If you are familiar with Fulfillment by Amazon or FBA program you know it’s a great way to reach
                        a vast customer base. You can have Amazon do all your heavy lifting however, regulations and
                        restrictions can soon make FBA program difficult to participate. That’s where we come in. You
                        can keep selling on Amazon but we’ll fulfill your order without any restriction and regulation.
                        That’s literally the best of both worlds: Amazon’s huge reach in one hand, and our flexible,
                        inexpensive order fulfillment in the other.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Customer Services</h2>
                    <p>
                        We are the most customer-centric logistics company on the face of earth. We accommodate the
                        needs of our clients like no other company. Our add-on services are as detailed and as
                        comprehensive that many of our clients no longer have to maintain a huge labor force. We offer
                        repackaging, package consolidation, assembly, barcode generation and many more services that
                        you’ll not find elsewhere. Our customer service representatives will take time to listen to you
                        and help you in any given situation.
                    </p>
                </div>
                <div class="text-block">
                    <h2>Consultations</h2>
                    <p>
                        To serve our clients even better, we offer a number of consultation services. Our consultation
                        service will actively help you throughout your project and follow up after the project to make
                        sure you got what you need. Our experts can help you negotiate lower freight rates. They can
                        also help you find real estate for your business and assist you negotiate price or lease. Once
                        you are in your new location, our consultants can help you design your workplace to make sure
                        you get most out of your space.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection