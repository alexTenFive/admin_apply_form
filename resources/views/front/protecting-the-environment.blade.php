@extends('layouts.app')
@section('title', 'Protecting the Environment')
@section('body', 'protecting-the-environment')
@section('img')
    <img src="{{ asset('images/front/protecting-the-enviroment.jpg') }}" alt="Protecting the Environment">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>In our line of business we cannot help but generate fair amount of waste. However, we make every
                        effort to minimize the amount of waste we generate and we strive to reuse /recycle most of our
                        waste.</p>
                    <p>We are an environmentally friendly business and we do everything in our power to reduce our
                        carbon footprint.</p>
                    <p>Here are few things we do differently to conserve our nature and reduce our carbon footprint:</p>
                    <ul>
                        <li>While purchasing new equipment and machinery, we go out of our way to buy an energy efficient
                            model when possible. We look for energy star rating, supplies that will be needed for ongoing
                            operation and product longevity among other things.
                        </li>
                        <li>We actively take part in multiple recycling programs so our waste don’t end up in the
                            landfills.
                        </li>
                        <li>We have eliminated paper process when possible and mostly went paperless in an effort to reduce
                            waste.
                        </li>
                        <li>We have adopted electronic communication channels over snail mail and other paper alternatives
                            where feasible.
                        </li>
                        <li>We are constantly evaluating our current practice and evolving to ensure we reduce waste and
                            maximize reuse and recycle processes.
                        </li>
                        <li>We are also identifying current practices that generate the most waste and trying to come up
                            with
                            alternative solution that generates less waste.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection