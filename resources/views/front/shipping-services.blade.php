@extends('layouts.app')
@section('title', 'Shipping Services')
@section('body', 'shipping-services')
@section('img')
    <img src="{{ asset('images/front/shipping.jpg') }}" alt="Shipping Services">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>We recognize the importance of getting product shipped out accurately and on time. Mistakes are
                        costly and delays are unacceptable. Managing large number of orders can quickly get out of hand
                        if you don’t have a method to this madness. In addition to outgoing orders, you’ll need to
                        manage incoming deliveries and manage inventory in a way that old inventory goes out first. All
                        in all, this is easier said than done and there is a ton of moving pieces that you need to
                        track.</p>
                    <p>Our staff can do all the above and some more. We will inspect your inventory on a regular basis
                        on multiple checkpoints. We will also manage the inventory policy and advice on low stock or
                        expiring stock so you can work on reordering or clearing older stock fast. We eliminate product
                        loss and minimize downtime due to low stock so you can enjoy a steady stream of revenue.</p>
                    <p>In addition to all these, we offer our clients with services like preloading where we’ll load
                        outgoing orders prior to their scheduled ship date so everything is ready to roll when the
                        carrier comes for pickup.</p>

                </div>
                <div class="text-block">
                    <h2>PRODUCT CHECKS</h2>
                    <p>{{env('COMPANY_NAME')}} utilizes cutting-edge technology and highly skilled personnel to streamline shipping
                        and receiving, manage inventory, process orders and everything with its operations. There are
                        multiple checks and balances in place that ensure our operation runs smoothly with minimal to no
                        loss of inventory. Technology is great as long as it works, therefore we complement innovative
                        use of technology with human factors to make sure we have some boots on the ground if things
                        were to go south. Our staff will visually inspect all incoming delivery, as well as all stored
                        inventory periodically to make sure there’s no surprise lurking in the dark. If anything out of
                        the ordinary is discovered, we get notified almost instantaneously so we can address the
                        underlying cause before it can become a major issue.</p>
                    <p>We have also implemented what we call, Advanced Protocols. These are basically scenario based
                        actionable steps for our staff to follow if something unusual were to happen. This is our
                        proactive approach to problems that have not happened yet, but we predict these scenarios
                        beforehand and basically tell our staff what to do in specific situations so they don’t have to
                        wait before they can act. This empowers our staff and helps us with our loss prevention effort.
                        While we have our own Advanced Protocols in place, our clients can also employ their own sets of
                        Advanced Protocols from their online portal that will be applicable to their product, delivery
                        and inventory only.</p>
                </div>
                <div class="text-block">
                    <h2>LOAD FLEXIBILITY</h2>
                    <p>
                        Schedules are awesome as long as they are ‘on schedule’. Late deliveries and early arrivals can
                        wreak havoc to any supply chain especially if you are hit by an unexpected schedule change. This
                        can have a ‘dominos effect’ to your entire operation and can quickly go out of hand. To offset
                        this problem, we offer our clients the flexibility of preloading and drop shipping. Preloading
                        means we’ll prepare shipment ahead of schedule. When carrier comes to pick up, everything is
                        ready to go. On the flip side, when we are busy and cannot process an incoming delivery, we
                        request carrier to drop the shipment and we process those as things calm down. Both preloading
                        and drop shipping helps us with load balancing and we can utilize our time and resources better.
                    </p>
                </div>
                <div class="text-block">
                    <h2>PRODUCT LABELING</h2>
                    <p>
                        We utilize state of the art product labeling and barcode technology. Our barcode not only helps
                        us track and monitor our inventory; it also tells us if something were to expire soon or have
                        special handling or storage requirement. We affix our own labels with barcode as soon as a
                        product is received. We scan this barcode at multiple points to both monitor and track a product
                        while in storage and throughout transit. We have our barcode system fully integrated with
                        Transportation Management System (TMS) – and this integration allows us to enjoy full control
                        over our product while in transit. If you need help with custom labeling and product barcode –
                        we can help.
                    </p>
                </div>
                <div class="text-block">
                    <h2>NETWORK OF CARRIERS</h2>
                    <p>
                        We deal with businesses from different parts of the world. As a result, we have established a
                        network of carriers that is second to none in the logistics industry. Our great relationship
                        with carriers allows us to negotiate great rates and we are more than happy to pass on these
                        unbelievably low rates to our clients. Our extensive partnership with both large carriers and
                        small, regional carriers enables us to enjoy best of both worlds: greater rates and greater
                        reach in any corner of the world. This simply translates into bigger savings and better services
                        for our clients.
                    </p>
                </div>
                <div class="text-block">
                    <h2>NOTIFICATIONS AND EDI</h2>
                    <p>
                        EDI stands for Electronic Data Interchange and this helps us be in total control of our incoming
                        and outgoing shipments. Our clients get real-time notification that is powered by EDI. In
                        addition to status update, changes can be made to delivery quickly and effortlessly – thanks
                        again to the EDI. We make this technology available to our clients so they can also enjoy the
                        flexibility of this powerful tool. We strongly encourage our clients to utilize EDI as this is
                        the fastest way to communicate with our staff on the ground and request customization in
                        real-time without any delay.
                    </p>
                </div>
                <div class="text-block">
                    <h2>KEY PERFORMANCE INDICATORS (KPIs)</h2>
                    <p>
                        We use KPIs extensively throughout the organization. Our KPIs allow us gauge how efficiently we
                        are operating and how we are doing as a business. These help us identify areas for improvement
                        and recommend change on existing workflows. We can help you set up KPIs for your business, train
                        your management staff on usage and interpretation of key performance indicators and can even
                        consult your business based on KPIs’ findings.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Reviews-->

@include('front.parts.reviews')

    <!--End Reviews-->
@endsection