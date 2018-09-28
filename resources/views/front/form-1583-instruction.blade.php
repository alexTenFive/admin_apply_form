@extends('layouts.app')
@section('title', 'Instructions for Form 1583')
@section('body', 'form-1583-instruction')
@section('img')
    <img src="{{ asset('images/front/front.jpg') }}" alt="Instructions for Form 1583">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <h2>USPS FORM 1583</h2>
                    <p>All third party mail service providers are required to have USPS Form 1583 filled by their client
                        before they can act on their before and receive or send mail pieces for them.</p>
                    <p>As a third party mail servicer, {{env('COMPANY_NAME')}} is known as Commercial Mail Receiving Agent or CMRA and
                        we are required by the law to have our customer fill this form before we can service any mail
                        pieces for them. This is a requirement set forth by USPS and Form 1583 essentially authorizes us
                        to act as your mailing agent.</p>
                </div>
                <div class="text-block">
                    <h2>WHO SHOULD COMPLETE FORM 1583?</h2>
                    <p>
                        Anyone who intends to leverage the services of a CMRA must complete USPS Form 1583.
                    </p>
                </div>
                <div class="text-block">
                    <h2>WHERE CAN I FIND A COPY OF THE USPS FORM 1583?</h2>
                    <p>
                        You can download a copy here: <a href="https://about.usps.com/forms/ps1583.pdf">USPS 1583</a>.
                        You can also pick up a hardcopy from any USPS location.
                    </p>
                </div>
                <div class="text-block">
                    <h2>INSTRUCTIONS TO FILL UP USPS FORM 1583:</h2>
                    <p>Among the three sections you will see on USPS Form 1583, section 1 and 2 must be completed by you
                        and the CMRA (us) will complete the third and final section.</p>
                    <p>Box 1: Enter the date when you’re completing the form</p>
                    <p>Box 2: Enter your name or company name if you’re a business</p>
                    <p>Box 3: Enter the address that we provided you when you signed up for this service</p>
                    <p>Box 4: Leave blank</p>
                    <p>Box 5: Sign if you’re individual; have it signed by authorized personnel if you’re a business</p>
                    <p>Box 6 & 7: Enter information about anyone else sharing this address</p>
                    <p>Box 8: Select from available ID options you intend to submit as part of the verification process.
                        One of these IDs must be a valid photo ID of the customer/authorized personnel from the
                        company.</p>
                    <p>Box 9: Only complete this box if you’re a business</p>
                    <p>Box 10a-10e: For businesses, this box should be filled with information for the authorized
                        personnel from the business</p>
                    <p>Box 11: Specify the industry of your business</p>
                    <p>Box 12: You can have any number of individual share this address with you but you are required to
                        provide their information here (use extra page if needed).</p>

                </div>
                <div class="text-block">
                    <h2>SUBMISSION RULE FOR USPS FORM 1583:</h2>
                    <p>
                        Form 1583 must be signed by the individual client or authorized personnel from the business. All
                        signature must also be notarized. Once you have completed, signed and notarized Form 1583, scan
                        it and send it along with your IDs to us so we can complete our portion and submit the form to
                        USPS for processing.
                    </p>
                </div>
                <div class="text-block">
                    <h2>ACCEPTABLE FORMS OF IDS:</h2>
                    <ul>
                        <li>Driver’s license, state ID or any other state or federal government issued photo ID</li>
                        <li>Vehicle registration card</li>
                        <li>Copy of mortgage, rental lease or utility bill</li>
                        <li>Naturalization card</li>
                        <li>Voter ID</li>
                        <li>Passport or passport card</li>
                        <li>Declaration page of current insurance policy in your name or your business</li>
                    </ul>
                </div>
                <div class="text-block">
                    <h2>EXCLUSIONS:</h2>
                    <p>
                        Birth certificate and social security cards will not be accepted as valid ID(s).
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection