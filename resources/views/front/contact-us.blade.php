@extends('layouts.app')
@section('title', 'Contact Us')
@section('body', 'contact-us')
@section('img')
    <img src="{{ asset('images/front/contact-us.jpg') }}" alt="Contact Us">
@endsection
@section('content')
    <iframe class="map-contact-us" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.8769988979443!2d-117.8639635844058!3d33.660348845726894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcde5b0d186603%3A0xf9aa8ce10552a919!2zNDAwMCBNYWNBcnRodXIgQmx2ZCAjNDEwLCBOZXdwb3J0IEJlYWNoLCBDQSA5MjY2MCwg0KHQqNCQ!5e0!3m2!1sru!2sua!4v1538047485839"  frameborder="0" style="border:0" allowfullscreen></iframe>
    <div id="scrollto" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 text-block">
                <div class="text-block">
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-md-8 col-12">
                            <form id="contact-us" class="form" method="post" action="{{ route('contact-us') }}">
                                <div class="form-hide">
                                    <div class="form-group">
                                        <input id="name" name="name" class="form-control req" type="text" placeholder="Name*">
                                        <div class="req-text">The Name field is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <input id="email" name="email" class="form-control req" type="email" placeholder="E-mail*">
                                        <div class="req-text">The email field is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <input id="phone" name="phone" class="phone form-control" type="text" placeholder="Phone (Optional)">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" name="message" class="form-control textarea req" placeholder="Message"></textarea>
                                        <div class="req-text">The message field is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_SITE_KEY') }}"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="alert empty"></div>
                                        <div class="col-12 text-center">
                                            <button class="btn btn-2 btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert not-empty success">
                                    Thank you! Your message has been sent, our customer support team will get in touch with you within 48 hours.
                                </div>
                                <input type="hidden" name="fid" value="contact">
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 contact-info">
                            <h3>{{env('COMPANY_NAME')}}</h3>
                            <h4>{{env('COMPANY_LEGAL')}}</h4>
                            <p>
                                <span class="marked">BBB® registered at:</span><br>
                                {!! env('ADDRESS_1') !!}
                            </p>
                            <p>
                                <span class="marked">BBB® registered at:</span><br>
                                {!! env('ADDRESS_2') !!}
                            </p>
                            <p>
                                <span class="marked"><span class="phone">{{ env('ADMIN_TEL') }}</span></span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection