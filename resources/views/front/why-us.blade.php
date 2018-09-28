@extends('layouts.app')
@section('title', 'Why Us?')
@section('body', 'why-us')
@section('img')
    <img src="{{ asset('images/front/why-parsendo.jpg') }}" alt="Why Us?">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>{{env('COMPANY_NAME')}} is seen as the benchmark in the logistics industry. We have been fortunate enough to
                        have clients who love us. Most of our competitors see us as the gold standard and try to match
                        our service but frankly, there’s quite a bit of travel ahead even for our closest competition.
                        Even with our superiority in our industry, we never rest. We are constantly innovating to
                        streamline our processes even better.</p>
                    <p>Our customer satisfaction rate reflects that we must be doing something right. We have been
                        humbled that so many our clients have entrusted us with their entire operation. Our business
                        success relies on our clients’ business success. Naturally, we have a vested interest to provide
                        quality service at an affordable rate so your business can thrive.</p>
                    <ul>
                        <li>Any process or workflow changes are thoroughly tested to make sure clients are not
                            negatively impacted.
                        </li>
                        <li>We thoroughly vet our staff to make sure they are qualified enough to handle valuable
                            products and can be trusted with sensitive information.
                        </li>
                        <li>We established great rapport with numerous carriers and enjoy great rates based on our
                            continued business relationships for years.
                        </li>
                        <li>We try and remain as flexible as we can to accommodate any client request. We also allow
                            customizable plans so you can make most of your dollar.
                        </li>
                        <li>We pass on savings from carrier, bulk rates and more to the client so you can enjoy
                            quality service at a low rate.
                        </li>
                    </ul>

                    <p>If you have any question, please feel free to call us and we’ll be happy to answer any question you
                        may have.</p>

                </div>
            </div>
        </div>
    </div>

    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection