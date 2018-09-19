@extends('layouts.app')
@section('title', 'Logistics Solutions For Business Customers')
@section('body', 'logistics-for-business-customers')
@section('img')
    <img src="{{ asset('images/front/logistics-for-business-customers.png') }}" alt="Logistics Solutions For Business Customers">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>
                        Mail Forwarding is one of the oldest services that we started to provide to our client base. Our
                        clients,
                        all over the world enjoy this service and they entrust us with their valuable package knowing that
                        we’d
                        be
                        able to provide the privacy and security that’s second to none.
                    </p>
                    <p>
                        It’s as simple as it can get to sign up for an online account and we’ll provide you with a U.S.
                        address
                        that
                        you can use to receive any shipment, mail or regular correspondence.
                    </p>
                    <p>
                        Our international clients appreciate this service as there are not a lot of sellers or e-commerce
                        sites
                        out
                        there that offer international shipping. With our Mail Forwarding service, they get to buy from
                        wherever
                        they want. This opens up new opportunity for overseas businesses.
                    </p>
                    <p>
                        Also, overseas businesses that want to maintain a U.S. address can chose to do so for merely a few
                        dollars a
                        month. We’ll receive all your mails and forward them as you request.
                    </p>
                    <p>
                        We serve both long and short term customers. Some overseas customers entrust us with all their
                        packages
                        and
                        mails while we have short term customers who trust us to handle their mail during busier times of
                        the
                        year
                        or during vacations.
                    </p>
                    <p>
                        We also discard any junk mail, advertisement etc. so you can enjoy a clutter free mail delivery no
                        matter
                        where you live.
                    </p>
                </div>
                <div class="text-block">
                    <h2>SIMPLE AND EASY</h2>
                    <p>
                        It cannot be any simpler. You’ll have an online portal; and you’ll be able to check your account and
                        all
                        mails right from your portal. You have access to your online portal 24/7. You can pay you bill, add
                        funds, check mails in transit and change your settings right from here.
                    </p>
                    <p>
                        You can also add, remove or customize your services as needed. If you choose to put your account on
                        hold
                        or close your account altogether – you can do everything right from your portal without ever needing
                        to
                        call anyone.
                    </p>
                    <p>
                        We will always respect your privacy and make sure your information is safe with multiple layers of
                        security in our infrastructure.
                    </p>
                </div>
                <div class="text-block">
                    <h2>UNINTERRUPTED ACCESS</h2>
                    <p>
                        As outlined above, you can access your account from virtually anywhere at any time with a mere mouse
                        click. As long as you have access to Internet, you can manage your account.
                    </p>
                </div>
                <div class="text-block">
                    <h2>OPTIONS</h2>
                    <p>
                        Our Mail Forwarding Services are flexible and completely customizable. You have several plans and
                        options to choose from. Our base plan starts at just $19.95/month.
                    </p>
                </div>
                <div class="text-block">
                    <h2>PRIVACY AND SECURITY</h2>
                    <p>
                        We offer complete discretion and the privacy of our customers is of utmost importance to us. Our IT
                        folks also ensure your data is safe with us by continuously monitoring our system from external
                        intrusion and make necessary steps in case of a data breach. Along with external threat detection
                        system, our facility is well-equipped with cameras, controlled access and more to prevent
                        unauthorized
                        access.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection