<nav class="navbar navbar-expand-lg main-nav">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('front/img/logo.png') }}" class="d-inline-block align-top" alt="">
        DORNEO.com
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav main">
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Mail Forwarding</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/quick-glimpse') }}">Quick Glimpse</a>
                    <a class="dropdown-item" href="{{ url('/how-it-works') }}">How it Works</a>
                    <a class="dropdown-item" href="{{ url('/plans-that-fit-your-needs') }}">Plans that Fit Your Needs</a>
                    <a class="dropdown-item" href="{{ url('/security-and-privacy') }}">Security and Privacy</a>
                    <a class="dropdown-item" href="{{ url('/frequently-asked-questions') }}">Frequently Asked Questions</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Logistics Services</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/shipping-services') }}">Shipping Services</a>
                    <a class="dropdown-item" href="{{ url('/receiving-services') }}">Receiving Services</a>
                    <a class="dropdown-item" href="{{ url('/transportation-management-systems') }}">Transportation Management Systems</a>
                    <a class="dropdown-item" href="{{ url('/logistics-solutions-for-businesses') }}">Logistics Solutions for Businesses</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Add-On Services</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/services-overview') }}">Overview of Services We Provide</a>
                    <a class="dropdown-item" href="{{ url('/order-fulfillment') }}">Order Fulfillment</a>
                    <a class="dropdown-item" href="{{ url('/amazon-fulfillment') }}">Fulfillement by Amazon (FBA)</a>
                    <a class="dropdown-item" href="{{ url('/quality-control') }}">Quality Control</a>
                    <a class="dropdown-item" href="{{ url('/customization') }}">Customization</a>
                    <a class="dropdown-item" href="{{ url('/consultation') }}">Consultation</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <span class="nav-link dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Our Mission</span>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/about-us') }}">About Us</a>
                    <a class="dropdown-item" href="{{ url('/what-our-customers-say') }}">What Our Customers Say</a>
                    <a class="dropdown-item" href="{{ url('/why-us') }}">Why Us?</a>
                    <a class="dropdown-item" href="{{ url('/customer-relations') }}">Customer Relations</a>
                    <a class="dropdown-item" href="{{ url('/protecting-the-environment') }}">Protecting the Environment</a>
                    <a class="dropdown-item" href="{{ url('/contact-us') }}">Contact Us</a>
                </div>
            </li>
            <li class="nav-item dropdown account">
                <a class="btn btn-2 nav-link dropdown-toggle" href="#" data-toggle="dropdown"
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