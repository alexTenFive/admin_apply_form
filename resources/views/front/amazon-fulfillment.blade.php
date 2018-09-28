@extends('layouts.app')
@section('title', 'Fulfillement by Amazon (FBA)')
@section('body', 'amazon-fulfillment')
@section('img')
    <img src="{{ asset('images/front/amazon-fulfillment.jpg') }}" alt="Fulfillement by Amazon (FBA)">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>Most online business owners have heard or considered Fulfillment by Amazon or FBA program by now.
                        Before you make your decision, let us lay out the pros and cons of FBA program so you can make
                        an informed decision.</p>
                    <p>You can leverage Amazon’s enormous customer base to your benefit. The FBA program also allows you
                        to take advantage of their workforce. Amazon can store your inventory in their warehouses across
                        the nation or even overseas. Their staff will prepare your package and ship them out when an
                        order is placed. They will also process payment on your behalf. Furthermore, they will even
                        process return on your behalf. You can use Amazon’s expertise, experience, workforce, huge
                        market, trusted payment gateway and more to your advantage with FBA program.</p>
                    <p>However, FBA program comes with strings attached. Amazon has strict standards and certain
                        regulations for businesses that use FBA program. Complying with all the complicated and often
                        convoluted rules can be daunting by itself. Even the simplest of honest mistake can cost you
                        hefty penalty or even bar you from the program. Don’t let this discourage you. We can help you
                        with the challenging portion of FBA so you can enjoy the benefits of this great program. Let
                        {{env('COMPANY_NAME')}} do the heavy lifting; we’ll make sure you play by Amazon’s rule while participating in
                        the FBA program.</p>
                    <p>{{env('COMPANY_NAME')}} essentially started the order fulfillment revolution that we have today in the
                        logistics industry. That means we have both the expertise and experience to engage with FBA with
                        full confidence. In this case, you’ll participate in FBA and {{env('COMPANY_NAME')}} will take care of
                        compliance, listing, product sourcing and more so all you do is lift a finger and tell us what
                        you’d like us to do. We also offer other add-on services that complements FBA program well and
                        you can add these services to your subscription at any time.</p>

                </div>
                <div class="text-block">
                    <h2>QUALITY CONTROL</h2>
                    <p>We specialize in quality control for inventories of any size, shape or color. We deploy both
                        advanced technology and highly skilled staff to enforce strict quality control mechanism to
                        ensure inventory quality. We have been providing this service for many years with dependability
                        that our clients can trust. Our pricing is lower than anyone else while our services is of the
                        highest quality.</p>
                    <p>Our quality control and inspection process starts with visual inspection as soon as the product
                        is delivered. Our state of the art tracking and monitoring system then takes over. Our staff
                        complements the automatic monitoring system by physically inspecting all inventories
                        periodically. In addition to quality control, we monitor low stock levels, upcoming expiration
                        date, etc., and report any findings promptly so proper steps can be taken to resolve any
                        potential issue.</p>
                    <p>While Amazon perform a quick, visual inspection, we provide a comprehensive inspection that
                        eliminates loss of revenue due to bad inventory. Our service also reduces the number of return
                        you’ll have to process, as a result, you’ll enjoy better margin, better customer experience,
                        potentially more returning customers and business reputation that you can be proud of. By
                        partnering with us, you will receive customized service that is second to none and you’ll also
                        get to leverage Amazon’s popularity to reach a larger audience to sell your product.</p>
                    <p>Quality is never compromised when you partner with us. Our near perfect order processing history
                        is something like a fable to our competitions. You’ll enjoy 24-hour access to your online portal
                        and receive real-time status update on all your products so you know what’s happening with your
                        business.</p>

                </div>
                <div class="text-block">
                    <h2>ITEM REGISTRATION</h2>
                    <p>Amazon requires that every single item they handle must be registered with them with 100%
                        accuracy. This registration process can be more complex than it seems at first glance. You have
                        to account for ASIN numbers, UPCs, serial numbers, model numbers, batch, ISBN numbers, correct
                        product dimensions, weight, shipment package dimension and weight, categories and subcategories
                        for accurate listing and more. This process can quickly become overwhelming when you’re handling
                        a large number of products.</p>
                    <p>By partnering with us, you can rest assured, we’ll handle product registration on your behalf and
                        we guarantee accuracy. Our staff and technology streamlines this process and can almost always
                        do this quicker than anyone else while maintaining accuracy. If we need to contact vendor or
                        manufacturer for any reason, we’ll happily do it so you don’t have to.</p>

                </div>
                <div class="text-block">
                    <h2>ITEM PREPARATION AND PACKAGING</h2>
                    <p>Often time bulk products will require repackaging for retail sale. You will also have to prep
                        each individual item as each order is placed. This can soon become a chore by itself. However,
                        with {{env('COMPANY_NAME')}} by your side, you can make this process a breeze. We can receive bulk packaging
                        directly from your vendor or manufacturer. If necessary, we will repackage your product for
                        retail sale and individually prepare each shipment with 100% accuracy guarantee.</p>
                    <p>Amazon enforces proper packaging standard and we are well aware of their standards. Our expert
                        staff will match or surpass any standard Amazon has set forth so you can continue to enjoy your
                        FBA benefits.</p>

                </div>
                <div class="text-block">
                    <h2>SHIPPING CARRIER</h2>
                    <p>
                        {{env('COMPANY_NAME')}} does more than order fulfillment. If you’re struggling to negotiate price with
                        shipping partners, we can help. Over the years, we established great relationship with multiple
                        shipping carriers and we enjoy low rates that are otherwise not available to public. By
                        partnering with us, you can unlock this lower rates and you’ll soon discover your subscription
                        fee with {{env('COMPANY_NAME')}} pays for itself and some more in no time.
                    </p>
                </div>
                <div class="text-block">
                    <h2>INELIGIBLE PRODUCTS</h2>
                    <p>While most products are eligible for FBA program, there are several items that are ineligible for
                        FBA program yet you can sell them on Amazon. If you’re selling any items that fall in this
                        category, we can handle order fulfillment on your behalf that Amazon won’t. Our fulfillment is
                        superior to Amazon’s or any other logistics company by miles. Our personal touch, flexibility,
                        larger savings and better services make our order fulfillment service a no brainer.</p>
                    <p>You have many options when you partner with {{env('COMPANY_NAME')}}: participate in FBA program and let us
                        handle products and registration for you; or you can sell on amazon and let us fulfill all your
                        orders. Call us today to find out what we can do to streamline your business.</p>

                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection