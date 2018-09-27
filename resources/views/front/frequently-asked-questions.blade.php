@extends('layouts.app')
@section('title', 'Frequently Asked Questions')
@section('body', 'frequently-asked-questions')
@section('img')
    <img src="{{ asset('images/front/mail-forwarding.jpg') }}" alt="Frequently Asked Questions">
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
                                    <span class="glyphicon glyphicon-triangle-right"></span>Can {{env('COMPANY_NAME')}} act as my CMRA?
                                </button>
                            </div>
                            <div id="row-1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, {{env('COMPANY_NAME')}} is a registered Commercial Mail Receiving Agent (CMRA).</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-2" aria-expanded="true" aria-controls="row-2">
                                    How do I subscribe for services?
                                </button>
                            </div>
                            <div id="row-2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Visit our website at {{env('COMPANY_DOMAIN')}} and create an account. Follow the prompts and
                                        provide all the requested information. To sign up for CMRA service, you’ll need
                                        to complete USPS Form 1583. You can obtain a copy of Form 1583 from your local
                                        USPS location or online here: <a href="https://about.usps.com/forms/ps1583.pdf">https://about.usps.com/forms/ps1583.pdf</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-4" aria-expanded="true" aria-controls="row-4">
                                    What’s the difficulty level to complete form 1583?
                                </button>
                            </div>
                            <div id="row-4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>USPS Form 1583 is straight forward, easy to fill and comes with detailed
                                        instructions. To assist you even further, we have a guide on our website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-5" aria-expanded="true" aria-controls="row-5">
                                    How can I get all my mails forwarded to me automatically?
                                </button>
                            </div>
                            <div id="row-5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can easily choose your preferences of mail forwarding and delivery from your
                                        online portal. Sign in to your account and under preferences for mail forwarding
                                        choose the option that best suits you. You can also include any special
                                        instruction in the note field. When we receive a mail on your behalf, we can
                                        refer to your saved preference(s) and process your mail accordingly. You can
                                        change your preference as often as you like.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-6" aria-expanded="true" aria-controls="row-6">
                                    Is there any restricted items or packages that I should be aware of?
                                </button>
                            </div>
                            <div id="row-6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We will process all legal and permissible items as outlined in the USPS postal
                                        guideline. If any parcel is unlawful or prohibited by carrier – we are unable to
                                        process those. We do not have restricted item list of our own. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-7" aria-expanded="true" aria-controls="row-7">
                                    What do I need to do with the address that {{env('COMPANY_NAME')}} assigned me?
                                </button>
                            </div>
                            <div id="row-7" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can use this provided address to receive mail, packages or online shopping
                                        deliveries. You can even use your assigned address to receive business
                                        correspondence. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-8" aria-expanded="true" aria-controls="row-8">
                                    What happens if someone misspells my name on an incoming mail piece?
                                </button>
                            </div>
                            <div id="row-8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Minor misspelling of names shouldn’t affect your mail processing. However, make
                                        sure the address is correct as we often don’t receive mail pieces addressed
                                        incorrectly and won’t be able to process them. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-9" aria-expanded="true" aria-controls="row-9">
                                    Who can I speak with if I am having problem with the service?
                                </button>
                            </div>
                            <div id="row-9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We have dedicated customer service representatives who are available during
                                        regular business hours to answer phone calls. We are also available via email,
                                        fax and online chat. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-10" aria-expanded="true" aria-controls="row-10">
                                    Is there an online portal that I can access to manage my account?
                                </button>
                            </div>
                            <div id="row-10" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You bet, you do. You have a dedicated online portal that has everything you need
                                        to have complete control of your account: subscription, packages, preferences
                                        and more. You can even pay bill, cancel, modify or add subscription right from
                                        your portal. Furthermore, you can check status of your packages in
                                        real-time. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-11" aria-expanded="true" aria-controls="row-11">
                                    How can I cancel my subscription?
                                </button>
                            </div>
                            <div id="row-11" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can cancel, modify or add subscription from your online portal. Login to your
                                        account and you’ll see the services you’re currently subscribing. There’s a
                                        cancel option next to each service – you can cancel from there. We humbly ask
                                        you to call us before cancelling so we can make sure we can make things right
                                        for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-12" aria-expanded="true" aria-controls="row-12">
                                    Can I share my address with others?
                                </button>
                            </div>
                            <div id="row-12" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While we do not restrict how many users can share an address, we humbly request
                                        you to not abuse the system. Within reasonable means, you’re more than welcome
                                        to share your address with anyone. Each shared contact will need to fill their
                                        own USPS Form 1583 before we can process their mail.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-13" aria-expanded="true" aria-controls="row-13">
                                    How does mail forwarding work?
                                </button>
                            </div>
                            <div id="row-13" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We provide you with a U.S. address. Use this address to receive online shopping
                                        orders, mail pieces, business correspondences etc. We will receive mail/packages
                                        on your behalf and based on your preference, we will forward those to any
                                        address you provide. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-14" aria-expanded="true" aria-controls="row-14">
                                    Will {{env('COMPANY_NAME')}} open my mail/package?
                                </button>
                            </div>
                            <div id="row-14" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No, we will never open any of your mail or package unless you specifically
                                        request us to do so. If you ask us to check content for damage and provide
                                        photographs of content when received, we will open the item in a secured area,
                                        take picture and upload to your portal. We will repackage and wait for further
                                        instruction or act per saved preferences on your account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-15" aria-expanded="true" aria-controls="row-15">
                                    How long does it take to receive my package?
                                </button>
                            </div>
                            <div id="row-15" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It depends on where you live, what preferences you have and many other factors.
                                        Once in transit, we cannot control how long it will take for a package or mail
                                        piece to reach you. Generally, we process all the packages within 48 hours of
                                        receiving unless you have preferences set to minimize shipping cost or
                                        consolidate package.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-16" aria-expanded="true" aria-controls="row-16">
                                    How is the quality of scanned images?
                                </button>
                            </div>
                            <div id="row-16" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We use latest equipment whenever we need to send you a scanned document. We also
                                        acknowledge that Internet connection in remote places has its limitation. Hence,
                                        we use 300 DPI resolution which is clear and legible, yet manageable in size so
                                        you can easily load/download from your online portal.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-17" aria-expanded="true" aria-controls="row-17">
                                    What happens if I receive junk mail?
                                </button>
                            </div>
                            <div id="row-17" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We do not process junk mails and simply weed those out, hence junk mails don’t count toward your monthly limit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row card-header justify-content-center">
                                <button class="tab-btn collapsed col-lg-10 col-md-12" data-toggle="collapse" data-target="#row-17" aria-expanded="true" aria-controls="row-17">
                                    I live close by; can I simply stop by and pick up my mails?
                                </button>
                            </div>
                            <div id="row-17" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our tracking won’t allow such pick up. We’ll only forward mails and packages via a carrier – no exception.
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