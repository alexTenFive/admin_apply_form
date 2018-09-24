@extends('layouts.app')
@section('title', 'Form 1583 Instruction')
@section('body', 'form-1583-instruction')
@section('img')
    <img src="{{ asset('images/front/front.jpg') }}" alt="Form 1583 Instruction">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <h2>Form 1583 – OVERVIEW</h2>
                    <p>
                        Any entity that offers a third party mail services is required by law to follow the rules set forth
                        by
                        USPS. These rules and guidelines must always be followed when acting as a mailing agent.
                    </p>
                    <p>
                        Parsendo is a third party mail service provider which is also known as Commercial Mail Receiving
                        Agent
                        (CMRA). Parsendo and its clients must follow USPS regulations and customs law. The client must also
                        complete and sign the USPS form 1583 that allows us to act as your mailing agent.
                    </p>
                </div>
                <div class="text-block">
                    <h2>WHO SHOULD COMPLETE FORM 1583?</h2>
                    <p>
                        Anyone who utilizes the services of any Commercial Mail Receiving Agent (CMRA) must complete this
                        form regardless if they are an individual or a business entity.
                    </p>
                    <h2>WHERE CAN I GET A COPY OF FORM 1583?</h2>
                    <p>
                        You can download a copy of Form 1583 here: USPS FORM 1583. You can also obtain a hard copy from any
                        local USPS office.
                    </p>
                </div>
                <div class="text-block">
                    <h2>STEP-BY-STEP INSTRUCTIONS:</h2>
                    <p>
                        Form 1583 has three sections: Sections 1 and 2 must be completed by the client. Section 3 will be
                        completed by the CMRA.
                    </p>
                    <p>
                        Box 1 – Enter date of your application
                    </p>
                    <p>
                        Box 2 – Enter your name (use business name if you’re a business client)
                    </p>
                    <p>
                        Box 3 – Enter the address that you were provided by Parsendo during account setup
                    </p>
                    <p>
                        Box 4 – Leave blank
                    </p>
                    <p>
                        Box 5 – Either sign it or have it signed by an authorized party
                    </p>
                    <p>
                        Box 6 & 7 – Enter information requested for any other entity who will be sharing the address with
                        you
                    </p>
                    <p>
                        Box 8 – Choose from one of the acceptable photo IDs
                    </p>
                    <p>
                        Box 9 – Leave this section blank unless you’re a business client. Business client, fill this section
                        as
                        appropriate.
                    </p>
                    <p>
                        Box 10a-10e – Provide information about CMRA
                    </p>
                    <p>
                        Box 11 – Indicate the industry of your business
                    </p>
                    <p>
                        Box 12 – You can authorize any number of individuals to use this address, however you’re required to
                        provide their information in this section.
                    </p>
                </div>
                <div class="text-block">
                    <h2>SUBMITTING FORM 1583</h2>
                    <p>
                        Form 1583 must be signed by either the customer or their authorized agent and should be notarized. U.S.
                        or overseas notary are both acceptable depending where the customer resides.
                    </p>
                    <p>
                        Once you have completed the form, scan the form and your IDs and mail them to us. We’ll complete our
                        portion and submit Form 1583 to USPS on your behalf.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection