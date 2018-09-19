@extends('layouts.app')
@section('title', 'Mail Forwarding FAQ')
@section('body', 'mail-forwarding-faq')
@section('img')
    <img src="{{ asset('images/front/mail-forwarding.png') }}" alt="Mail Forwarding FAQ">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-block">
                    <div id="accordion">
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-1" aria-expanded="true" aria-controls="row-1">
                                    <span class="glyphicon glyphicon-triangle-right"></span>Can Parsendo act as my CRMA?
                                </button>
                            </div>
                            <div id="row-1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, acting as a Commercial Mail Receiving Agent is one of many services we extend to our clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-2" aria-expanded="true" aria-controls="row-2">
                                    How can I sign up for services?
                                </button>
                            </div>
                            <div id="row-2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Visit our website and create an account. Login to your account and select the services that you’re
                                        interested in. Follow the prompts and provide us with the requested information. If you have selected
                                        our CMRA subscription, you will be required to complete form 1583 from the United States Postal Service
                                        (USPS). <a href="https://about.usps.com/forms/ps1583.pdf">Here’s a link</a> to the form 1583: You can
                                        also obtain a copy from your local USPS office.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-4" aria-expanded="true" aria-controls="row-4">
                                    Is it possible to get my mail automatically forwarded to me?
                                </button>
                            </div>
                            <div id="row-4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, you bet. The easiest way to automate the forwarding would be to save your preference under your
                                        account – you can save your instruction from your online portal. When we receive you mail, we can simply
                                        follow your account preference and automatically forward to the address you have on file. You can change
                                        your account preferences any time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-5" aria-expanded="true" aria-controls="row-5">
                                    Are there any package restriction or prohibited item that I should know about?
                                </button>
                            </div>
                            <div id="row-5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We will process any item as long as it is legal and not prohibited by either the law or the carrier. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-6" aria-expanded="true" aria-controls="row-6">
                                    How can I use the address Parsendo assigned to me?
                                </button>
                            </div>
                            <div id="row-6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can use this address any way you like. Feel free to use this for online shopping deliveries, specific
                                        business or personal mails or just use it for mails and packages all together.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-7" aria-expanded="true" aria-controls="row-7">
                                    What happens if my name is misspelled on my mail?

                                </button>
                            </div>
                            <div id="row-7" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Minor misspellings should not delay your mail processing. However, it’s imperative that you use the
                                        correct mailing address we provide. We won’t be able to process mails or packages that is not delivered
                                        to the address that we provide. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-8" aria-expanded="true" aria-controls="row-8">
                                    Do you have real people I can talk to if I have an issue?

                                </button>
                            </div>
                            <div id="row-8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, our friendly customer service agents are U.S. based and available to talk to during business hours.
                                        In addition to telephone, we also offer email, fax and online chat options should you need to contact
                                        us. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-9" aria-expanded="true" aria-controls="row-9">
                                    Can I access my account online?
                                </button>
                            </div>
                            <div id="row-9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, you have full access to your account online. In fact, you can change and control all aspects of your
                                        account and subscription right from your online portal. You can also make payment, edit, modify or drop
                                        subscription from your account with just a few mouse clicks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-10" aria-expanded="true" aria-controls="row-10">
                                    How can I cancel my subscription?
                                </button>
                            </div>
                            <div id="row-10" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Login to your online account. You’ll see a list of services that you’re subscribing. There’s cancel
                                        option next to each service. Select this option and follow the prompts to cancel any or all service. If
                                        you are dissatisfied with any of your services, we encourage to call us so we can make things right for
                                        you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-11" aria-expanded="true" aria-controls="row-11">
                                    Can I share my address with other people?
                                </button>
                            </div>
                            <div id="row-11" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, you can. We do not restrict the number of users who can use the address provided. However, make sure
                                        you have those names listed under your account so we can correctly forward those mails or packages. We
                                        may have to ask to complete separate form 1583 individually from each individual.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-12" aria-expanded="true" aria-controls="row-12">
                                    How does mail and package forwarding work?
                                </button>
                            </div>
                            <div id="row-12" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Use the address for any mail or package you’d like. Any mail or package that you sent to this address
                                        will be received by us, and based on your instructions or account preference, we will forward them to
                                        any address you want. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-13" aria-expanded="true" aria-controls="row-13">
                                    Will you open my mail?
                                </button>
                            </div>
                            <div id="row-13" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Privacy is of paramount importance to us. We never open any mail except you clearly request us to. If you
                                        subscribe to our quality control services, we will open your package in a secure area, photograph the
                                        content and upload the file to your online portal, and finally repackage and forward to you. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-14" aria-expanded="true" aria-controls="row-14">
                                    How long does it take to receive my packages?
                                </button>
                            </div>
                            <div id="row-14" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Unfortunately, this is out of our control. The mail carrier delivers your package and depending on your
                                        instructed mail or package delivery services, delivery time can vary. However, after receiving your mail
                                        or package, it is our goal to forward them within 48 hours. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-15" aria-expanded="true" aria-controls="row-15">
                                    What’s the image quality of the scanned pictures or photographs?
                                </button>
                            </div>
                            <div id="row-15" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We utilize most advanced office equipment and that includes our cameras and scanners. Whenever we need to
                                        send you scanned documents, we utilize at least 300 dpi resolution so it’s clear and legible and the
                                        file size is manageable at the same time. Same goes for photographs, they are high resolution and clear
                                        but manageable size. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-16" aria-expanded="true" aria-controls="row-16">
                                    How do you handle junk mails?
                                </button>
                            </div>
                            <div id="row-16" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We do not process junk mails. If we receive junk mails, we weed and discard them. Junk mail is never
                                        counted toward your monthly limit on your plan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-17" aria-expanded="true" aria-controls="row-17">
                                    I live close to one of your locations. Can I physically stop by and pick up my mail?
                                </button>
                            </div>
                            <div id="row-17" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No, our automated process does not allow us hand deliver. All forwarding must be completed through
                                        carriers to ensure proper billing, tracking and documentation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection