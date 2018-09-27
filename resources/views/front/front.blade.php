@extends('layouts.app')
@section('title', 'Fueling your logistics chain')
@section('body', 'front')
@section('page_id', '111')
@section('img')
    <img src="{{ asset('images/front/front.jpg') }}" alt="Fueling your logistics chain">
@endsection
@section('content')
    <div class="container block block-cells">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-1.png') }}" alt="LOGISTICS FOR BUSINESSES">
                </div>
                <h3 class="title">LOGISTICS FOR BUSINESSES</h3>
                <p class="text">
                    We offer comprehensive logistics support for businesses around the globe. We offer fully customizable plans to fit your need.
                </p>
                <a href="{{ url('/logistics-solutions-for-businesses') }}" class="btn more">Learn More</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-2.png') }}" alt="MAIL FORWARDING">
                </div>
                <h3 class="title">MAIL FORWARDING</h3>
                <p class="text">
                    No matter where you live, you can take advantage of our mail forwarding services and enjoy the freedom that comes with it.
                </p>
                <a href="{{ url('/quick-glimpse') }}" class="btn more">Learn More</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-3.png') }}" alt="ADD-ON SERVICES">
                </div>
                <h3 class="title">ADD-ON SERVICES</h3>
                <p class="text">
                    We offer additional services like storage, consultation on real estate, work space design, help unlock great rates with carriers etc.
                </p>
                <a href="{{ url('/services-overview') }}" class="btn more">Learn More</a>
            </div>
        </div>
    </div>

    <!--About us-->

    <div class="block about-us content-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <h2 class="title text-center">About Us</h2>
                    <div class="text text-left">
                        <p>
                            {{ env('COMPANY_NAME')}} is the industry leader in the field of comprehensive logistics support. Our jaw
                            dropping low price is coupled with unmatched services. Our customers basically enjoy the
                            best of both world: fair pricing and top of the line service. Our customer satisfaction rate
                            is through the roof and we are adding new customers constantly. We have helped streamline
                            business processes for numerous clients and hundreds of customer reviews prove we are the
                            best at what we do.
                        </p>
                        <p>
                            We have kept an open channel for customer feedback and been constantly evolving based on the
                            feedbacks we have received. As a result, today, we are proud to present you with the most
                            efficient third-party mailing and logistics company on the face of the earth.
                        </p>
                        <p>
                            We leverage cutting-edge technology to better serve our clients. While we use technology
                            heavily, we don’t just rely on it entirely. Our team members work hard to make sure your
                            products and packages are well taken care of – whether they are in our inventory or while
                            they are in transit. We invite you to research some of our competitors and we are confident
                            you’ll soon find we offer the most comprehensive services at the best possible rate.
                        </p>
                        <div class="btn-wrap text-center">
                            <a href="{{ url('/about-us') }}" class="btn btn-2 more">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End About us-->

    <div class="container block block-cells">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-4.png') }}" alt="ORDER FULFILLMENT">
                </div>
                <h3 class="title">ORDER FULFILLMENT</h3>
                <p class="text">
                    We’ll fulfill your orders on your behalf. We source product, repackage for retail, ship and accept returns – so you don’t have to.
                </p>
                <a href="{{ url('/order-fulfillment') }}" class="btn more">Learn More</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-5.png') }}" alt="QUALITY CONTROL">
                </div>
                <h3 class="title">QUALITY CONTROL</h3>
                <p class="text">
                    Our state of the art quality control mechanism makes damaged, expired or rotten inventory a thing from the past.
                </p>
                <a href="{{ url('/quality-control') }}" class="btn more">Learn More</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-6.png') }}" alt="CUSTOMIZATION">
                </div>
                <h3 class="title">CUSTOMIZATION</h3>
                <p class="text">
                    We know there’s no one shoe fit all. We offer you complete customization options so you can make most of your subscription.
                </p>
                <a href="{{ url('/customization') }}" class="btn more">Learn More</a>
            </div>
        </div>
    </div>

    <!--Why us-->

    <div class="block why-us content-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <h2 class="title text-center">WHY {{ env('COMPANY_DOMAIN')}}?</h2>
                    <div class="text text-left">
                        <p>
                            {{ env('COMPANY_NAME')}} has established itself as one of the industry leaders when it comes down to
                            comprehensive logistics
                            support. We have developed a reputation for providing top-notch services at a jaw-dropping, low
                            price. We
                            have developed a lean business model that serves both us and our clients well. We received
                            thousands of
                            positive reviews from our clients all over the world. {{ env('COMPANY_NAME')}} has been credited for simplifying
                            business
                            processes for numerous clients and successfully eliminated logistical bottlenecks to maximize
                            their profit.
                            We take great pride in our team and what we have done together for our clients.
                        </p>
                        <p>
                            We are constantly receiving feedback from our clients and adopting how we operate based on those
                            feedbacks.
                            We are identifying areas where we can improve our process to streamline our services so our
                            clients can have
                            the best possible supply chain in place.
                        </p>
                        <p>
                            We use cutting edge technology and leverage this technology to serve our clients. We travel the
                            extra mile
                            and attend about protecting privacy and security of our clients with several layers of
                            protective mechanism
                            in place. We urge you to research few of our competitors before choosing our service and we are
                            positive, no
                            one else would be able to come close to what we offer.
                        </p>
                        <div class="btn-wrap text-center">
                            <a href="{{ url('/why-us') }}" class="btn btn-2 more">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End Why us-->

    <div class="container block block-cells">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-7.png') }}" alt="CONSULTATION SERVICES">
                </div>
                <h3 class="title">CONSULTATION SERVICES</h3>
                <p class="text">
                    We offer consultation services on a wide range of subjects, anything from real estate to carrier liaison, our experts are ready to help.
                </p>
                <a href="{{ url('/consultation') }}" class="btn more">Learn More</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-8.png') }}" alt="CUSTOMER SATISFACTION">
                </div>
                <h3 class="title">CUSTOMER SATISFACTION</h3>
                <p class="text">
                    We couldn’t be where we are today with our valued customers. Our customer satisfaction rate is near perfect and we intend to keep it that way.
                </p>
                <a href="{{ url('/what-our-customers-say') }}" class="btn more">Learn More</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="img">
                    <img src="{{ asset('front/img/ico-9.png') }}" alt="PROTECTING THE ENVIRONMENT">
                </div>
                <h3 class="title">PROTECTING THE ENVIRONMENT</h3>
                <p class="text">
                    {{ env('COMPANY_NAME')}} is a socially and environmentally responsible organization. We take care to keep our carbon footprint at bay.
                </p>
                <a href="{{ url('/protecting-the-environment') }}" class="btn more">Learn More</a>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection