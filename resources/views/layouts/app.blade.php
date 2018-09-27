<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="" />
    <link rel="icon" type="img/png" href="" sizes="196x196" />
    <link rel="icon" type="img/png" href="" sizes="96x96" />
    <link rel="icon" type="img/png" href="{{ asset('front/img/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="img/png" href="{{ asset('front/img/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="img/png" href="" sizes="128x128" />
    <meta name="application-name" content="{{ env('COMPANY_NAME', 'Dorneo') }};"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-square70x70logo" content="" />
    <meta name="msapplication-square150x150logo" content="" />
    <meta name="msapplication-wide310x150logo" content="" />
    <meta name="msapplication-square310x310logo" content="" />
    <meta name="theme-color" content="#000">

    <title>@yield('title', 'Fueling your logistics chain') | {{ env('COMPANY_DOMAIN', 'Dorneo.com' )}} </title>
    <link rel="stylesheet" href="{{ asset('front/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>
<body class="@yield('body', 'front')">
<div class="header-wrap">
    <div class="img-wrap">
        @hasSection('img')
            @yield('img')
        @else
            <img src="{{ asset('images/front/front.png') }}" alt="@yield('title', 'Fueling your logistics chain')">
        @endif
        <div class="title">

            <div class="container">
                @yield('title', 'Fueling your logistics chain')
                @hasSection('apply')
                    <div class="subtitle">Job Application</div>
                @endif
                @hasSection('page_id')
                    <div class="btn-wrap">
                        <a class="btn" href="/about-us">Learn more</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container menu-container">
        @include('front.parts.menu')
    </div>
</div>
@hasSection('page_id')
@else
    <div class="submenu">
        <div class="container">
            <div id="submenu-wrap" class="submenu-wrap">
                <!--Here goes submenu-->
            </div>
        </div>
    </div>
@endif
<div id="content" class="content">
    @yield('content')
</div>
<!--Bottom-->

<div class="bottom block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 br-right">
                <div class="img text-center">
                    <img src="{{ asset('front/img/ico-10.png') }}" alt="">
                </div>
                <div class="text">
                    Our highly trained, friendly customer service representatives are always ready to lend you a helping
                    hand when you need them. Whether you have a question or need help selecting a plan or experiencing a
                    problem – our customer service representatives got your back. To us, customer service is not just
                    another department, it’s an attitude and every single member of our team embodies this attitude. All
                    our customers receive the same level of attention and treatment: doesn’t matter if you’re on a $20
                    plan or a multi-million-dollar client. We are always approachable and can be reached by phone, fax,
                    email or online chat.
                </div>
            </div>
            <div class="col-lg-6 col-md-12 block-newsletter">
                <div class="img text-center">
                    <img src="{{ asset('front/img/ico-11.png') }}" alt="">
                </div>
                <div class="text">
                    Logistics is an evolving industry and there’s always something new and exciting is happening. If you
                    are interested on the latest breakthrough and other news in the field of logistics, consider
                    subscribing to our newsletter. We’ll deliver all the latest and greatest news from our industry to
                    your inbox diligently.
                </div>
                <div class="row">
                    <div class="col-12">
                        <form class="subscribe" action>
                            <div class="form-group">
                                <label for="subscribe" class="sr-only">subscribe</label>
                                <input type="email" class="form-control req" id="subscribe" placeholder="Your E-mail">
                                <div class="req-text">The email field is required.</div>
                                <div class="alert not-empty success">
                                    Thank you for signing up for {{ env('COMPANY_NAME') }} newsletter!
                                </div>
                                <div class="alert empty"></div>
                                <button type="submit" class="btn btn-2 btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row info">
            <div class="col-lg-6 col-md-12 br-right pad-top">
                <div class="row">
                    <div class="col-sm-2 col-12 text-center text-sm-left">
                        <img class="ico-inline" src="{{ asset('front/img/ico-12.png') }}" alt="">
                    </div>
                    <div class="col-10 block-info">
                        <div class="row">
                            <div class="col-4">
                                Business Hours:<br><br>
                                Phone:
                            </div>
                            <div class="col-8">
                                Monday through Friday; 09:00 AM – 5:00 PM (Pacific Standard Time)<br>
                                <span class="phone">{{env('ADMIN_TEL')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 contact-us">
                                Please call or <a class="email-us" href="{{ url('/contact-us') }}">email us</a>  with any question that you may have.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pad-top">
                <div class="row">
                    <div class="col-sm-2 col-12 text-center text-sm-left">
                        <img class="ico-inline" src="{{ asset('front/img/ico-13.png') }}" alt="">
                    </div>
                    <div class="col-sm-10 col-12 block-info menu">
                        <a href="{{ url('/form-1583-instruction') }}">Instructions for Form 1583</a><br>
                        <a href="{{ url('/quick-glimpse') }}">Mail Forwarding Frequently Asked Questions</a><br>
                        <a href="{{ url('/security-and-privacy') }}">Security and Privacy Measures</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Bottom-->

<!--Footer-->
<div class="container footer">
    <div class="row block justify-content-center">
        <div class="col-lg-3 col-md-6 col-12">
            <h3 class="title">Company</h3>
            <ul>
                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                <li><a href="{{ url('/what-our-customers-say') }}">What Our Customers Say</a></li>
                <li><a href="{{ url('/why-us') }}">Why Us?</a></li>
                <li><a href="{{ url('/customer-relations') }}">Customer Relations</a></li>
                <li><a href="{{ url('/protecting-the-environment') }}">Protecting the Environment</a></li>
                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <h3 class="title">Services</h3>
            <ul>
                <li><a href="{{ url('/shipping-services') }}">Shipping Services</a></li>
                <li><a href="{{ url('/receiving-service') }}">Receiving Services</a></li>
                <li><a href="{{ url('/transportation-management-systems') }}">Transportation Management</a></li>
                <li><a href="{{ url('/logistics-solutions-for-businesses') }}">Logistics For Business</a></li>
                <li><a href="{{ url('/quick-glimpse') }}">Mail Forwarding</a></li>
                <li><a href="{{ url('/security-and-privacy') }}">Security and Privacy</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <h3 class="title">Add-On</h3>
            <ul>
                <li><a href="{{ url('/services-overview') }}">Overview of Services We Provide</a></li>
                <li><a href="{{ url('/order-fulfillment') }}">Order Fulfillment</a></li>
                <li><a href="{{ url('/amazon-fulfillment') }}">Fulfillement by Amazon (FBA)</a></li>
                <li><a href="{{ url('/quality-control') }}">Quality Control</a></li>
                <li><a href="{{ url('/customization') }}">Customization</a></li>
                <li><a href="{{ url('/consultation') }}">Consultation</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <h3 class="title">Parsendo</h3>
            Powerteam international<br>
            11671 Sterling Ave Ste G<br><br>
            Riverside, CA 92503<br><br>
            <span class="phone">{{ env('ADMIN_TEL') }}</span>
        </div>
    </div>
</div>
<div class="copy">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 payments">
                <img src="{{ asset('front/img/ico-visa.png') }}" alt="">
                <img src="{{ asset('front/img/ico-mc.png') }}" alt="">
                <img src="{{ asset('front/img/ico-gw.png') }}" alt="">
                <img src="{{ asset('front/img/ico-ae.png') }}" alt="">
                <img src="{{ asset('front/img/ico-amazon.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-12 text-center copyright">
                © 2018 Powerteam International. <span class="all-rights">All rights reserved.</span><br>
                <a href="{{ url('/terms-of-service#policy') }}">Privacy Policy</a> | <a href="{{ url('/terms-of-service#terms') }}">Terms of Service</a>
            </div>
            <div class="col-lg-4 col-md-12">

            </div>
        </div>
    </div>
</div>
<!--End Footer-->
<script src="{{ asset('front/libs/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('front/libs/popper.min.js') }}"></script>
<script src="{{ asset('front/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/libs/jquery.mask.min.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="{{ asset('front/js/ajaxUploader/SimpleAjaxUploader.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>

</body>
</html>

