@extends('layouts.main')

@section('title')
Legionaries
@endsection

@section('content')
        <div class="banner clearfix">
                <!-- slideshow start -->
                <div class="slideshow">
                    <!-- slider revolution start -->
                    <div class="slider-banner-container">
                        <div class="slider-banner-fullwidth">
                            <ul class="slides">

                                <!-- slide 2 start -->
                                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on">
                                    <!-- main image -->
                                    <img src="/images/about4.jpg" alt="slidebg1" data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">
                                    
                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                        data-x="center"
                                        data-y="bottom"
                                        data-speed="600"
                                        data-start="0">
                                    </div>

                                </li>
                                <!-- slide 2 end -->

                                <!-- slide 3 start -->
                                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on">
                                    <!-- main image -->
                                    <img src="/images/about4.jpg" alt="slidebg2" data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">


                                </li>
                                <!-- slide 3 end -->
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                    <!-- slider revolution end -->
                </div>
                <!-- slideshow end -->
            </div>
            <!-- banner end -->

        <!-- section start--> 
        <section class="light-gray-bg pv-30 clearfix">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- page-title start -->
                        <!-- ================ -->
                        <h1 class="page-title">Legionaries</h1>
                        <div class="separator-2"></div>
                        <!-- page-title end -->

                        <h4>The most inspired, inspire others. Leaders know how to listen.</h4>
                                        
                        <div class="separator-2"></div>

                        <blockquote>Legionaries are in a new kind of profession, which gives them the opportunity to be themselves, independent and grow prosperous in a system that is created for holistic profitability. It is for those who to make the world a better place and be a force of good vibes created in their community. While they progress towards self actualization.</blockquote>

                        <h5>Is it work? A Job? A Partnership? What is it?</h5>
                        <p>An inventive profession combining leadership, guidance, independence, community, self growth, a solid and fertile ground for prosperity.</p>

                        <h5>How does it work?</h5>
                        <p>Revenue sharing for real work, for the purpose of keeping up the communty code and community vibe.  
                        - accomplished legion members are co-creating personal teachings into admissible fees and packages, so can you potentially. These are sold with equal revenue sharing. 
                        - organisation of larger events including Victus Parties in your area.</p>

                        <h5>What's the work?</h5>
                        <p>The job is to work, grow and create towards a network of likeminded people within a community that shares the value of self mastery, hence also teaching others. This means that such teachers of any given art of self growth or the masters as we call them, shall receive guidance material from you, which is taken from the victus archives. The masters can choose you or any another legion member in your area. Your job is to maintain the quality standards given by Victus in the physical activity and hence make sure that all guidelines are followed. You may approve or disapprove any master when they sign up.
                        You will be required to scout for locations like gyms, rooms and other event locations. 
                        You will be required to follow up with any master under your guidance and legion supervisor.
                        You will be required in person to get to know your master apprentice, assist them with set up. This usually takes one hour maximum. Further, for any assistance required that are not technical and in relevance to guidelines or the code.    
                        You will be assessed on your masters ratings, reviews from students and quality of your work in general.</p>

                        <h5>Legionaries characteristics </h5>
                        <p>Humble, friendly, honest, wise, easily connects with people, purpose driven, smart, service and duty orientated, disciplined and persistent.</p>

                        <h5>Further</h5>
                        <p>Spiritually awakened or open minded, Intuitive. Deeper understanding of life balanced with real life stability.</p>

                        <h5>Legionaries skills required</h5>
                        <p>Organisational skills like event planning, relationship building, business development.</p>

                        <h5>So what is it then?</h5>
                        <p>It is a business within a business with no investments other than your work and genuine drive to create the best community within the community. 
                        This business only works with love, therefore it is more than just a business.</p>

                        <div class="separator-2"></div>
                        <a href="{{url('/auth/signup')}}" class="btn btn-default-transparent btn-lg btn-hvr hvr-sweep-to-right">Become a Legion</a>
                    </div>


                </div>
            </div>
        </section>  
        <!-- start end-->
@endsection