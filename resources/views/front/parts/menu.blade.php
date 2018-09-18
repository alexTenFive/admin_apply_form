<nav class="navbar navbar-expand-lg main-nav">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/front/assets/logo.png') }}" class="d-inline-block align-top" alt="">
        DORNEO.com
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav main">
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle">Mail Forwarding</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/mail-forwarding-at-a-glance">Mail Forwarding At a Glance</a>
                    <a class="dropdown-item" href="/how-mail-forwarding-works">How Mail Forwarding Works</a>
                    <a class="dropdown-item" href="/options-that-fit-your-needs">Options that Fit Your Needs</a>
                    <a class="dropdown-item" href="/privacy-and-security">Privacy and Security</a>
                    <a class="dropdown-item" href="/mail-forwarding-faq">Mail Forwarding FAQ</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle">Logistics</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/shipping">Shipping</a>
                    <a class="dropdown-item" href="/receiving">Receiving</a>
                    <a class="dropdown-item" href="/transportation-management-systems">Transportation Management
                        Systems</a>
                    <a class="dropdown-item" href="/logistics-for-business-customers">Logistics For Business
                        Customers</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle">Add-On Services</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/services-overview">Services Overview</a>
                    <a class="dropdown-item" href="/order-fulfillment">Order Fulfillment</a>
                    <a class="dropdown-item" href="/amazon-fulfillment">Amazon Fulfillment</a>
                    <a class="dropdown-item" href="/quality-control">Quality Control</a>
                    <a class="dropdown-item" href="/customization">Customization</a>
                    <a class="dropdown-item" href="/consultation-services">Consultation Services</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle">Our Mission</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/about-us">About Us</a>
                    <a class="dropdown-item" href="/customer-satisfaction">Customer Satisfaction</a>
                    <a class="dropdown-item" href="/why-parsendo">Why Parsendo?</a>
                    <a class="dropdown-item" href="/customer-relations">Customer Relations</a>
                    <a class="dropdown-item" href="/protecting-the-enviroment">Protecting the Enviroment</a>
                    <a class="dropdown-item" href="/contact-us">Contact Us</a>
                </div>
            </li>
            <li class="nav-item dropdown account">
                <a class="btn btn-2 nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    My account
                </a>
                <div class="dropdown-menu">
                    <div class="modal-content text-center">
                        @include('front.parts.modal-login')
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>