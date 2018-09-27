@extends('layouts.app')
@section('title', 'What Our Customers Say')
@section('body', 'what-our-customers-say')
@section('img')
    <img src="{{ asset('images/front/customer-satisfaction.jpg') }}" alt="What Our Customers Say">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>At {{env('COMPANY_NAME')}}, we take great pride in our customer service staff. To us, customer service isn’t
                        just another department; it’s an attitude and we embody this attitude every day, with everything
                        that we do. Our staff participate in ongoing training to stay on top of current development. We
                        handpick people who are considerate, polite and has a genuine knack for helping people. With our
                        customer service, let us assure you, you will never be left high and dry. Our very existence
                        depends on your continuing business success hence we have vested interest in you succeeding. Our
                        customer service staff are well aware of this fact and they go out of their way to listen to you
                        and help.</p>
                    <p>Our customer service staff are well known for being available, listening to clients and provide
                        timely assistance to question, queries or any issues that you might be experiencing. If further
                        research is required, our customer service staff will take themselves out of the call answering
                        queue, reach out or research as necessary and promptly follow up with you so you don’t have to
                        wait for days to hear back from us.</p>
                    <p>We vet the best of our team members to our customer service team. When you sign up for our
                        service, we assign you two dedicated representatives so you have uninterrupted coverage. These
                        representatives will work as liaisons between your company and ours. They will act on our mutual
                        interest: to make sure your business rocks. They will take time to familiarize themselves with
                        your business operation and will adjust the services we provide to better align with your
                        business.</p>
                    <p>We cannot be in this business if our customers are not thriving as a result of our assistance.
                        Having been on this business for many years, we must be doing something right otherwise we won’t
                        enjoy the loyal customer base along with a growing pool of clients. Customer satisfaction and
                        measurable result justifies our service.</p>
                    <p>We also have a dedicated IT and security team that work round the clock to ensure safety for both
                        your physical inventory and electronic information. Both physical infrastructure and
                        cutting-edge technology ensures your information and inventory are both safe with us.</p>
                    <p>Our customer service representatives can be reached by phone, fax, email or online chat. We are
                        available during regular business hours to answer any question you might have.</p>

                </div>
            </div>
        </div>
    </div>

    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection