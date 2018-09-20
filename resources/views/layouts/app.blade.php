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
    <link rel="icon" type="img/png" href="" sizes="32x32" />
    <link rel="icon" type="img/png" href="" sizes="16x16" />
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

    <title>@yield('title', 'Always Ahead') | {{ env('COMPANY_NAME', 'Dorneo' )}} </title>
    <link rel="stylesheet" href="{{ asset('front/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>
<body class="@yield('body', 'front')">
<div class="container-fluid">
    <div class="row img-wrap">
        @hasSection('img')
            @yield('img')
        @else
            <img src="{{ asset('images/front/front.png') }}" alt="@yield('title', 'Always Ahead')">
        @endif
        <div class="title">

            <div class="container">
                @yield('title', 'Always Ahead')
                @hasSection('page_id')
                <div class="btn-wrap">
                    <a class="btn" href="">Learn more</a>
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

@yield('content')

<!--Bottom-->

<div class="bottom block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="img text-center">
                    <img src="{{ asset('front/img/ico-10.png') }}" alt="">
                </div>
                <div class="text">
                    Our highly trained staff of customer service representatives are always on hand to help you out.
                    Have a question? Need help selecting a plan? Have a problem? No sweat, they have you covered. We
                    have a professional team in place whose main job is to make you, the customer, happy. And our
                    customer service doesn’t just stop with that department. Our customer service extends throughout our
                    whole operation. It’s everybody’s job as far as we are concerned. Each and every customer gets
                    top-notch attention and service regardless of what services they receive from us. You can reach us
                    by phone, fax, email or chat. So give us a holler when you need us!
                </div>
                <hr class="divider">
                <div class="row">
                    <div class="col-2">
                        <img class="ico-inline" src="{{ asset('front/img/ico-11.png') }}" alt="">
                    </div>
                    <div class="col-10 block-info">
                        <div class="row">
                            <div class="col-4">
                                Business Hours:<br>
                                Phone:
                            </div>
                            <div class="col-8">
                                Monday through Friday, 9am-5pm (PST)<br>
                                <span class="phone">(800) 695-2287</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 contact-us">
                                Please call us or you can also email us at <a class="email-us" href="">email us</a> with any questions.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="img text-center">
                    <img src="{{ asset('front/img/ico-12.png') }}" alt="">
                </div>
                <div class="text">
                    Logistics is an evolving industry and some of our clients are genuinely interested to learn what’s
                    happening in the industry and staying on top of latest developments. We have dedicated a newsletter
                    for these clients so they can be in the know. If you are interested, please feel free to sign up for
                    the newsletter with your email address and we will deliver all the latest developments right to your
                    inbox.
                </div>
                <div class="row">
                    <div class="col-12">
                        <form class="form-inline subscribe">
                            <label for="subscribe" class="sr-only">subscribe</label>
                            <input type="email" class="form-control" id="subscribe" placeholder="Your E-mail">
                            <button type="submit" class="btn btn-2 btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-2">
                        <img class="ico-inline" src="{{ asset('front/img/ico-13.png') }}" alt="">
                    </div>
                    <div class="col-10 block-info menu">
                        <a href="">Form 1583 Instruction</a><br>
                        <a href="">Mail Forwarding Frequently Asked Questions</a><br>
                        <a href="">Privacy and Security Measures</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Bottom-->

<!--Footer-->
<div class="container footer">
    <div class="row block">
        <div class="col-lg-3 col-md-6 col-12">
            <h3 class="title">Company</h3>
            <ul>
                <li><a href="">About Us</a></li>
                <li><a href="">Customer Satisfaction</a></li>
                <li><a href="">Why Parsendo?</a></li>
                <li><a href="">Customer Relations</a></li>
                <li><a href="">Protecting the Enviroment</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <h3 class="title">Services</h3>
            <ul>
                <li><a href="">Shipping</a></li>
                <li><a href="">Receiving</a></li>
                <li><a href="">Transportation Management</a></li>
                <li><a href="">Logistics For Business</a></li>
                <li><a href="">Mail Forwarding</a></li>
                <li><a href="">Privacy and Security</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <h3 class="title">Add-On</h3>
            <ul>
                <li><a href="">Services Overview</a></li>
                <li><a href="">Order Fulfillment</a></li>
                <li><a href="">Amazon Fulfillment</a></li>
                <li><a href="">Quality Control</a></li>
                <li><a href="">Customization</a></li>
                <li><a href="">Consultation Services</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <h3 class="title">Parsendo</h3>
            Powerteam international<br>
            11671 Sterling Ave Ste G<br><br>
            Riverside, CA 92503<br><br>
            <span class="phone">{{  env('ADMIN_TEL') }}</span>
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
            <div class="col-lg-4 col-md-12 text-center">
                © 2018 Powerteam International. All rights reserved.<br>
                <a href="">Privacy Policy</a> | <a href="">Terms of Service</a>
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>

