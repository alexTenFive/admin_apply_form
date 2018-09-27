@extends('layouts.app')
@section('title', 'Security and Privacy')
@section('body', 'security-and-privacy')
@section('img')
    <img src="{{ asset('images/front/privacy-and-security.jpg') }}" alt="Security and Privacy">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>
                        {{env('COMPANY_NAME')}} understands that it is not easy to entrust a third party to handle essential business
                        functions. Whether they can handle the job with the same level of care and to the specifics, whether
                        they are accurate enough when filling orders, whether they can handle your products with special
                        care and storage instruction and so forth – these are all valid points of concerns. We acknowledge
                        this all and rest assured, we have been in this business for many years and we have been humbled by
                        hundreds of loyal businesses that entrust us with their products, orders and customers.
                    </p>

                </div>
                <div class="text-block">
                    <h2>DEDICATED MAILBOXES</h2>
                    <p>Each team members at {{env('COMPANY_NAME')}} goes through an extensive background check and rigorous screening
                        and interview process to make sure they are qualified to handle responsibility and maintain a
                        certain amount of discretion while processing assignments. After hiring, we have continuous
                        training for professional growth and improvement so our team members are always sharp and ahead
                        of the game to serve you better.</p>
                    <p>We strive to make sure all packages are processed within 48 hours of receiving. We inspect your
                        package for any damage, take pictures, upload pictures to your online portal and act on either
                        preset protocol(s) or wait for further instruction from you. We will never share your
                        information with any third party without your explicit permission or in rare cases, Court
                        Order</p>
                </div>
                <div class="text-block">
                    <h2>SCANNING</h2>
                    <p>
                        When we need to scan documents to upload, we have secure facility with limited access to
                        authorized personnel only for scanning. We also utilize cutting edge security technology to
                        prevent unauthorized data breach. Our equipment’s are always latest and fine-tuned to deliver
                        the best quality of image.
                    </p>
                </div>
                <div class="text-block">
                    <h2>RECEIVING AND INVENTORY</h2>
                    <p>
                        Our staff are continually trained in a variety of areas so they are always handling packages and
                        products as intended, minimizing damage and preventing loss of inventory. They are trained to
                        spot potential issues while receiving, report any issues promptly so it can be rectified as
                        quickly as possible and they know proper handling techniques for virtually any inventory. If you
                        have products that are fragile, hazardous or sensitive in any way – we know how to handle and
                        store for you.
                    </p>
                </div>
                <div class="text-block">
                    <h2>RECYCLING AND SHREDDING</h2>
                    <p>
                        We are committed to reduce waste and recycle as much as possible. We participate in several
                        recycling programs in an aim to reduce the amount of trash that ends up in landfills from us. We
                        have adopted paperless delivery when possible. For situations where we cannot eliminate papers,
                        we introduced multiple shredding stations so all client data can be securely destroyed before we
                        hand those down for recycling. We do what we can to protect our environment – this is the
                        responsible way of doing business.
                    </p>
                </div>
                <div class="text-block">
                    <h2>EMPLOYEES</h2>
                    <p>We cannot thank our employees enough. We are where we are today because of our tireless employees
                        who strive to go out of their way to make sure each package is being processed timely,
                        accurately and to the exact specifics.</p>
                    <p>We reward our employees by promoting a healthy work-life balance, paying them an above-average
                        salary and offering them a comprehensive benefits package so they don’t have to worry on the
                        bare necessities. We also engage our employees in ongoing trainings and promote them within our
                        corporate structure to foster professional growth.</p>
                    <p>We are fortunate to have such a wonderful workforce that has been handling entrusted client
                        packages and products without any interruption for years.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Reviews-->

@include('front.parts.reviews')

    <!--End Reviews-->
@endsection