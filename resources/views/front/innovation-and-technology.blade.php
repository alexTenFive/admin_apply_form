@extends('layouts.app')
@section('title', 'Innovation and Technology')
@section('body', 'innovation-and-technology')
@section('img')
    <img src="{{ asset('images/front/customer-relations.jpg') }}" alt="Innovation and Technology">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-block">
                    <p>{{env('COMPANY_NAME')}} believes in dedication and hard work. That’s why we strive to do better even after
                        being nominated as the best company in third party mail and logistics industry year after
                        year.</p>
                    <p>We are constantly evaluating our current practices and discovering new ways to streamline our
                        processes. We are innovating new processes and transforming how businesses are conducted.</p>
                    <p>{{env('COMPANY_NAME')}} focuses on delivering services that are both comprehensive and affordable. Inexpensive
                        often means cheap; but that’s not the case with us. We offer the most cost-effective; yet the
                        most comprehensive and highest quality service you’ll find in the industry. We don’t cut corners
                        to save money; our cost cutting measures come from efficiency and streamlined processes.</p>
                    <p>Our data analytics team gather client feedback and present them meaningfully so management team
                        can take actionable steps based on client feedback. Since our clients are directly impacted, no
                        one else has better insight on how we are doing and what can be improved. We take customer input
                        very seriously and based on the feedback we receive, we reevaluate our processes so we can
                        better align ourselves with our clients’ needs.</p>
                    <p>There are several ways we are making sure our clients are taken care of while maintaining good
                        morale internally so the team is motivated to help our clients:</p>
                    <ul>
                        <li>Create a safe workplace that encourages professional growth</li>
                        <li>Fully utilize technology to stay ahead in the game</li>
                        <li>Patronize creativity and innovation to foster more efficient, cost effective processes</li>
                        <li>Receive client and employee feedback and meaningfully analyze those feedbacks to make operational changes</li>
                        <li>Train team members on an ongoing basis</li>
                        <li>Promote the 5S Methodology: Sort, Set in Order, Shine, Standardize and Sustain</li>
                        <li>Create a symbiotic relationship among clients, carriers and vendors</li>
                        <li>Make use of cutting-edge technology and latest equipment to leverage the business edge over competitions.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Reviews-->

    @include('front.parts.reviews')

    <!--End Reviews-->
@endsection