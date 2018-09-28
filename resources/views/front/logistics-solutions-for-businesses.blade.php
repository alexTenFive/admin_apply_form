@extends('layouts.app')
@section('title', 'Logistics Solutions for Businesses')
@section('body', 'logistics-solutions-for-businesses')
@section('img')
    <img src="{{ asset('images/front/logistics-for-business-customers.jpg') }}" alt="Logistics Solutions for Businesses">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>{{env('COMPANY_NAME')}} has a proven process that lets our clients rest assured that their product and
                        operations will be taken care of without ever compromising service level agreement. We have been
                        in this business for many years and frankly, we couldn’t have been in business if we were not
                        good at what we are doing. We have the experience, expertise, knowledge and technical know-how
                        to handle any logistics challenge you can throw at us. We take a proactive approach when it
                        comes to resolving problems and our preset Advanced Protocols help our staff determine next
                        steps in case of anything out of the ordinary were to happen. This empowers our staff, cuts
                        response time, and helps eliminate or mitigate product loss.</p>
                    <p>{{env('COMPANY_NAME')}} receives and stores your product and using industry-leading technology, tracks and
                        monitors inventories throughout storage and transit. Our system is designed to alert our clients
                        when products are running low in stock or approaching expiration date.</p>
                    <p>We are operating at a near perfect order fulfillment accuracy while maintaining unsurpassed
                        efficiency and speed. Throughout the entire process, our clients’ goal and business prospect
                        remains at the forefront of all that we do. We keep a proverbial open-door policy as far as
                        client feedbacks are concerned. We embrace every feedback and evaluate our workflow to see if
                        there’s any room for improvement. We believe customer satisfaction is the paramount to our
                        business success and we’re always ready to travel the extra mile to make sure you’re satisfied
                        with the service you’re receiving from us.</p>
                </div>
                <div class="text-block">
                    <h2>PROCESSES AND NOTIFICATIONS</h2>
                    <p>All {{env('COMPANY_NAME')}} clients receive the same treatment regardless of their subscription level. We treat
                        our client who spends $20 a month with the same attitude and professionalism as we treat another
                        client who may be spending million dollars a month. Each client is equally important to us and
                        we travel the extra mile to make sure all our clients are well taken care of.</p>
                    <p>We have clients from all over the world. To accommodate everyone, we offer a number of ways to
                        communicate with us. While EDI is the recommended means of communication, we can be reached via
                        online chat, email and fax at any time. We are also available to respond to phone calls during
                        regular business hours.</p>

                </div>
                <div class="text-block">
                    <h2>ALLOCATIONS AND ADVANCED PROTOCOLS</h2>
                    <p>As a client, you have full control over how we handle and process your packages. You can set up,
                        what we call, Advanced Protocols. Advanced Protocols are sets of rules that our staff will
                        follow if certain conditions were true. For example: you can set an Advanced Protocol to send
                        products back to vendor if they were damaged. This would save time and streamline processing as
                        we won’t have to wait for your instruction for each occurrence of damaged product. These
                        Advanced Protocols serve as a proactive approach to certain situations and can dramatically
                        improve processing time.</p>
                    <p>You can set up an unlimited number of Advanced Protocols: for late delivery, early delivery,
                        forward instruction (consolidate vs faster forwarding), when inventory is running low, when
                        products are approaching expiration date and more. These advanced directives help us expedite
                        processing time and serve you better. If you need any help establishing Advanced Protocols,
                        please reach out to your account representatives and they will help you with the process.</p>
                    <p>While we utilize technology quite heavily, we do not blindly rely on it. We have several checks
                        and balances in place that help us identify any problems before they can emerge as a work
                        stoppage issue. We also employ our skilled workforce to complement technology, and have downtime
                        procedure in place in case we are having an outage of any sort.</p>

                </div>
                <div class="text-block">
                    <h2>CONSOLIDATION</h2>
                    <p>
                        Our clients enjoy incredible savings with our competitive pricing. You can choose to save even
                        more by opting for mail and/or package consolidation. If you choose mail/package consolidation,
                        we will identify packages and/or mails that can be combined to reduce shipping costs. Our staff
                        will combine, repackage as necessary to maximize your savings.
                    </p>
                </div>
                <div class="text-block">
                    <h2>TRANSPORTATION MANAGEMENT SYSTEMS</h2>
                    <p>
                        We utilize Transportation Management Systems (TMS) to track, manage, and communicate with our
                        carriers. This allows us to communicate and provide delivery instruction to our carriers in
                        real-time. TMS also allows us and our clients to track the status of a shipment and schedule
                        delivery or request delivery change in real time. If a shipment is delayed or rescheduled for
                        early delivery, we get notified through TMS and this allows us to reallocate resources to
                        maximize our productivity. If carriers need to reach out to us or the client, they can also
                        utilize TMS to get in touch with us quickly.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection