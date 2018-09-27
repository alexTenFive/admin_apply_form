@extends('layouts.app')
@section('title', 'Terms of Service and Privacy Policy')
@section('body', 'terms-of-service')
@section('img')
    <img src="{{ asset('images/front/terms-of-service.jpg') }}" alt="Terms of Service and Privacy Policy">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <h2 id="terms">Terms Of Service</h2>
                    <h3 class="text-center">1. Terms</h3>
                    <p>
                        {{env('COMPANY_LEGAL')}} leaves very little to chance. We use industry-specific technology and equipment
                        to streamline receiving and shipping as well as inventory management. We have various levels of
                        checks and balances we use to ensure proper stock levels and reduce product loss due to spoilage
                        and breakage. Even though our inventory management system is second to none, we still back it up
                        with physical checks which are performed by our staff. Our staff will visually check stored
                        product to ensure it is stored in the proper location and there are adequate levels available
                        for incoming orders. We also check special storage conditions to confirm that all protocols are
                        being followed and all specifications are as required. If we find anything at all that is of
                        concern, the findings are immediately reported to the appropriate personnel and the customer if
                        warranted so we can implement solutions immediately.
                    </p>
                    <h3 class="text-center">2. Use License</h3>
                    <p>a. The materials on {{env('COMPANY_LEGAL')}}'s website are provided on an 'as is' basis. {{env('COMPANY_LEGAL')}}
                        makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties
                        including, without limitation, implied warranties or conditions of merchantability, fitness for
                        a particular purpose, or non-infringement of intellectual property or other violation of
                        rights.</p>
                    <p>b. Further, {{env('COMPANY_LEGAL')}} does not warrant or make any representations concerning the accuracy,
                        likely results, or reliability of the use of the materials on its website or otherwise relating
                        to such materials or on any sites linked to this site.</p>

                </div>
                <div class="text-block">
                    <h2 id="policy">Privacy Policy</h2>
                    <h3 class="text-center">2. Use License</h3>
                    <p>Your privacy is important to us. It is {{env('COMPANY_LEGAL')}}'s policy to respect your privacy regarding
                        any information we may collect from you across our website, {{env('COMPANY_DOMAIN')}}.</p>
                    <p>We don’t ask for your personal information unless we truly need it. When we do, we’ll only
                        collect what we need by fair and lawful means and, where appropriate, with your knowledge or
                        consent. We’ll also let you know why we’re collecting it and how it will be used.</p>
                    <p>We don’t share your personal information with third-parties, except where required by law. We
                        will only retain personal information for as long as necessary to provide you with a
                        service.</p>
                    <p>We don’t store your personal information on our servers unless it’s required for providing a
                        service to you. What we store, we’ll protect within commercially acceptable means to protect
                        your personal information from loss or theft, as well as unauthorized access, disclosure,
                        copying, use or modification.</p>

                </div>

            </div>
        </div>
    </div>

@endsection