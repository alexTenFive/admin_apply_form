@extends('layouts.app')
@section('title', 'Plans that Fit Your Needs')
@section('body', 'plans-that-fit-your-needs')
@section('img')
    <img src="{{ asset('images/front/options-that-fit-your-needs.jpg') }}" alt="Plans that Fit Your Needs">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="text-block">
                <p>We offer several packages that work for both individuals and businesses alike. Our receiving agents
                    will visually inspect your package after receiving your delivery. If any damage is suspected, they
                    will promptly report it upstream, take photographs so you can see pictures of your package in the
                    portal and decide next steps.</p>
                <p>The address we provide can be used in a variety of ways. You can use this address to receive your
                    business correspondence, or you can use it to receive your online shopping orders or a combination
                    of both. It’s up to you how you want to use or maximize your address. We try to remain flexible so
                    you can make most of your subscription.</p>
                <p>When it’s time to forward your package to their destination, you have several options. You can have a
                    set of preset protocols so you don’t have to instruct us on every individual package routing. You
                    can have protocols that allow faster processing by choosing immediate forwarding to a preset
                    address, or you can choose to consolidate packages to minimize shipping cost or you can manually
                    instruct us where to forward each individual package.</p>

            </div>
            <div class="text-block">
                <h2>ONLINE ACCESS</h2>
                <p>
                    Our customers come from different countries and span different time zones. In order to accommodate
                    everybody’s schedule and needs, we have ensured our customers have access to a reliable portal 24x7.
                    With online access to customer portal, clients are in full control of their packages. You can
                    receive update on your order, pay bills, change or cancel subscription, change account preferences
                    and update address etc. right from your portal.
                </p>
            </div>
            <div class="text-block">
                <h2>SECURE ONLINE SCANNING</h2>
                <p>Our staff will never open your package unless they get explicit request from the client. After
                    receiving item, out staff visually inspect, photograph and forward the package. In no circumstance,
                    we will break the seal, unpack original packaging or remove part of your order.</p>
                <p>However, you can request us to open any package and we will promptly report you back with the
                    findings: content, condition and other information with photographs that you can review from your
                    online portal. Our staff opens package at designated, secured areas to make sure we are discreet and
                    your privacy is protected even when we are opening package based on your explicit request. If any
                    damage is discovered we can either wait on your instruction or you can have a damage protocol
                    established so we can follow that protocol and save time.</p>
                <p>We have multiple layers of physical and electronic protective measures to ensure safety and privacy
                    of your package and your personal information.</p>
                <p>You can read more about our security practices here {INSERT LINK}.</p>

            </div>
            <div class="text-block">
                <h2>RECYCLING AND SHREDDING</h2>
                <p>In our line of business, we cannot help but generate a fair amount of waste. We make every effort to
                    minimize waste by reusing and participating in various recycling programs.</p>
                <p>We shred all paper correspondence with client information before recycling. We are also adopting
                    electronic means of communication over paper in an attempt to reduce waste, streamline processing
                    time and tread lightly to reduce our carbon footprint.</p>

            </div>
            <div class="text-block">
                <h2>MORE INFORMATION</h2>
                <p>
                    If you have any question or would like more information about any of our policies or processes,
                    please feel free to call us and we’ll be more than happy to help in any way we can.
                </p>
            </div>
        </div>
    </div>
</div>

<!--Reviews-->

@include('front.parts.reviews')

<!--End Reviews-->
@endsection