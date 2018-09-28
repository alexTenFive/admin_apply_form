@extends('layouts.app')
@section('title', 'Receiving Services')
@section('body', 'receiving-services')
@section('img')
    <img src="{{ asset('images/front/receiving.jpg') }}" alt="Receiving Services">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>Companies that sell tangible products to customers have their own sets of challenges: not only
                        you have to fulfill orders; but also, you want to keep up a certain reputation that separates
                        you from the crowd. You are responsible to make sure products reach customers intact; without
                        any damage. Order fulfillment has never been more crucial with the e-commerce boom we are
                        experiencing today. You’ll also have to process return, refunds, exchange for a certain
                        percentage of orders. Not to mention, payment processing can also be a challenge by itself.</p>
                    <p>Unless you’re the manufacturer, you’ll also have to manage incoming products and store those
                        deliveries in appropriate climate to eliminate product spoilage or damage. In addition to
                        building proper storage, you’ll need to train and maintain a workforce that can handle these
                        incoming inventories for you. Fragile or hazardous items can be especially notorious to deal
                        with. You’ll have to make sure you’re compliant with OSHA, state and federal environmental laws
                        and regulations and more.</p>
                    <p>You can handle all these on your own or you can have {{env('COMPANY_NAME')}} handle these for you and some more
                        for a fraction of the cost. We have the facility, staff, expertise and we can do this better
                        than anyone out there. Let us help you take your business to the next level.</p>

                </div>
                <div class="text-block">
                    <h2>RECEIVING</h2>
                    <p>
                        Our staff will quickly unload incoming deliveries, inspect them for any damage and report any
                        findings to management. The customer will be advised and they can check their incoming packages
                        from their online portal too. From there, we’ll affix new labels with barcode and a simple scan
                        will provide everything our staff need to know about proper handling and storage for that given
                        product. Our tracking and monitoring system will keep an eye on your product from this point
                        onward. In addition to automated monitoring, our staff will periodically check on your product
                        to make sure everything is viable and no damage is being caused.
                    </p>
                </div>
                <div class="text-block">
                    <h2>TRACKING</h2>
                    <p>
                        Our state of the art barcode technology makes inventory a breeze. With a simple scan, our staff
                        can retrieve all they need to know including inventory level, proper storage or handling
                        instruction, expiration date and more. These barcodes even aid us in monitoring and tracking our
                        inventory throughout the storage and transit period. We complement this amazing technology with
                        our expert staff and other checks and balances to ensure a mere technology failure doesn’t
                        result in product damage.
                    </p>
                </div>
                <div class="text-block">
                    <h2>NOTIFICATIONS</h2>
                    <p>
                        Our cutting-edge EDI technology helps us send immediate notifications to clients as their
                        product status change throughout the storage and transit. Schedule change, delivery instruction,
                        delay delivery etc. all can be communicated right from the EDI for added convenience and control
                        over your products. EDI transmits instantaneously to clients, carriers, our staff and vendors
                        (if applicable). We highly recommend EDI for real-time communication and we use this daily as
                        our primary means of communication.
                    </p>
                </div>
                <div class="text-block">
                    <h2>DROP SHIPPING</h2>
                    <p>
                        Drop shipping allows our clients to stockpile when vendor runs a sale or clears their inventory
                        at a discounted price. Drop shipping works for products that don’t require climate controlled
                        environment for storage. You do not have to worry about storage as we’ll request carrier to drop
                        the trailer at our storage facility and will unload when possible. If you have any question
                        about drop shipping, let us know. Our friendly staff are always eager to help you with any
                        question that you may have.
                    </p>
                </div>
                <div class="text-block">
                    <h2>AUTOMATED STORAGE SELECTION</h2>
                    <p>
                        With a single scan of the label/barcode, our RF scanners quickly inform our staff of appropriate
                        storage environment for a given item. Products that need to be stored separately, or need to be
                        stored in a climate-controlled environment can be quickly identified and stored appropriately.
                        We can also work with the carrier to ensure a climate controlled transit is being arranged for
                        certain products. Same applies for fragile and potentially hazardous materials. This helps us
                        mitigate inventory loss due to improper handling and/or storage.
                    </p>
                </div>
                <div class="text-block">
                    <h2>KEY PERFORMANCE INDICATORS</h2>
                    <p>
                        Key performance indicators or otherwise known as KPIs help us gauge how we are doing as a
                        business. This also helps us identify areas for improvement and areas where we are doing better.
                        We will gladly share this business analytic tool with any of our clients and help them set and
                        track their KPIs to make sure their businesses are running as efficiently as possible. We’ll set
                        up KPIs and even train your staff to meaningfully interpret the results.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

@include('front.parts.reviews')

    <!--End Reviews-->
@endsection