@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
            <!-- banner start -->
            <div class="banner clearfix">
                <!-- slideshow start -->
                <div class="slideshow">
                    <!-- slider revolution start -->
                    <div class="slider-banner-container">                        
                        <a href="{{url('/auth/signup')}}" class="btn btn-lg btn-default btn-animated" id="Get_Trial_Landing_Center">Get Started<i class="fa fa-arrow-right pl-20"></i></a>
                        <div class="slider-banner-fullwidth">                            

                            <ul class="slides">
                                <!-- slide 1 start -->
                                <li data-transition="slidehorizontal" data-slotamount="1"  data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-saveperformance="off">
                                    <!-- main image -->
                                    <img src="/images/sign-bg3.jpg" alt="slidebg1" data-bgposition="center center"  data-bgrepeat="no-repeat" data-bgfit="cover">
                                    
                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                        data-x="center"
                                        data-y="bottom"
                                        data-speed="600"
                                        data-easing="easeOutQuad"
                                        data-start="0">
                                    </div>

                                    <!-- Video Background -->
                                    <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                        data-x="0"
                                        data-y="0"
                                        data-speed="1000"
                                        data-start="1100"
                                        data-easing="Power4.easeOut"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1500"
                                        data-endeasing="Power4.easeIn"
                                        data-autoplay="true"
                                        data-autoplayonlyfirsttime="false"
                                        data-nextslideatend="true"
                                        data-volume="mute" 
                                        data-forceCover="1" 
                                        data-aspectratio="16:9" 
                                        data-forcerewind="on" 
                                        style="z-index: 2;">
                                        <video class="" preload="none" width="100%" height="100%" poster="/images/sign-bg3.jpg"> 
                                            <source src="/videos/background-video-banner2.mp4" type="video/mp4"/>
                                            <source src="/videos/background-video-banner.webm" type="video/webm"/>
                                        </video>
                                    </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfb fadeout large_white text-right"
                                        data-x="right"
                                        data-y="150"
                                        data-speed="500"
                                        data-start="1000"
                                        data-easing="easeOutQuad">
                                        <span class="logo-font">Victus Network</span>                                        
                                    </div>  

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfb fadeout large_white tp-resizeme"
                                        data-x="right"
                                        data-y="200"
                                        data-speed="500"
                                        data-start="1300"
                                        data-easing="easeOutQuad">
                                        <div class="separator-3 light"></div>
                                    </div>  

                                    <!-- LAYER NR. 3 -->                               

                                    
                                </li>
                                <!-- slide 1 end -->

                                <!-- slide 2 start -->
                                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on">
                                    <!-- main image -->
                                    <img src="/images/banner10.jpg" alt="slidebg1" data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">
                                    
                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                        data-x="center"
                                        data-y="bottom"
                                        data-speed="600"
                                        data-start="0">
                                    </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfb fadeout large_white"
                                        data-x="left"
                                        data-y="150"
                                        data-speed="500"
                                        data-start="1000"
                                        data-easing="easeOutQuad"
                                        data-end="10000">
                                        Make the best of your life
                                    </div>  

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfb fadeout text-left medium_white"
                                        data-x="left"
                                        data-y="230" 
                                        data-speed="500"
                                        data-start="1300"
                                        data-easing="easeOutQuad"
                                        data-endspeed="600">
                                        We are ready for the adventure in seeking wisdom for the way of life.
                                    </div>

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption sfb fadeout text-left medium_white"
                                        data-x="left"
                                        data-y="290" 
                                        data-speed="500"
                                        data-start="1600"
                                        data-easing="easeOutQuad"
                                        data-endspeed="600">
                                        Commited to change. 
                                    </div>
                                </li>
                                <!-- slide 2 end -->

                                <!-- slide 3 start -->
                                <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on">
                                    <!-- main image -->
                                    <img src="/images/home4.jpg" alt="slidebg2" data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">

                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                        data-x="center"
                                        data-y="bottom"
                                        data-speed="600"
                                        data-start="0">
                                    </div>

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfb fadeout large_white"
                                        data-x="left"
                                        data-y="150"
                                        data-speed="500"
                                        data-start="1000"
                                        data-easing="easeOutQuad"
                                        data-end="10000">
                                        Change yourself to change the world.
                                    </div>  

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfb fadein medium_white"
                                        data-x="left"
                                        data-y="250"
                                        data-speed="500"
                                        data-start="1500"
                                        data-easing="easeOutQuad"
                                        data-end="10000">
                                        A community of self empowerment.
                                    </div> 

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption sfb fadein medium_white"
                                        data-x="left"
                                        data-y="300"
                                        data-speed="500"
                                        data-start="2000"
                                        data-easing="easeOutQuad"
                                        data-end="10000">
                                        Love happiness, compassion.
                                    </div>                                   
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

            <div id="page-start"></div>
            
            <!-- section start -->
            <section class="light-gray-bg pv-30 clearfix" style="background: url('/images/pattern/pattern.png') repeat 50% 0; background-size: 10px 10px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="text-center" style="text-shadow: 3px 3px 7px #3b5802;color: #abe02e;"><strong>Explore life and grow happy</strong></h1>
                            <div class="separator"></div>
                            <p class="large text-center" style="text-shadow: 0 0 2px #9cd80b;">A REAL COMMUNITY OF GOOD VIBES AND POSITIVE ACTION</p>
                        </div>

                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/coaching.png" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'coaching', 'num'=>'1']) !!}">Coaching</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'coaching', 'num'=>'1']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/cooking.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'cooking', 'num'=>'3']) !!}">Cooking</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'cooking', 'num'=>'3']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/creative.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'creative', 'num'=>'2']) !!}">Creative Activities</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'creative', 'num'=>'2']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                  
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/dance.png" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'dance', 'num'=>'7']) !!}">Dance</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'dance', 'num'=>'7']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                  
                        </div>                         
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/film.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'film', 'num'=>'5']) !!}">Film</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'film', 'num'=>'5']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/economy.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'economy', 'num'=>'6']) !!}">New Economy</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'economy', 'num'=>'6']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/music.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'music', 'num'=>'8']) !!}">Singing</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'music', 'num'=>'8']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                  
                        </div>
                        <div class="col-sm-3">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container">
                                    <img src="images/yoga.jpg" alt="">
                                    <div class="overlay-top">
                                        <div class="text">
                                            <h4><a href="{!! route('workshop', ['mode'=>'yoga', 'num'=>'4']) !!}">Yoga</a></h4>
                                        </div>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="links">
                                            <a href="{!! route('workshop', ['mode'=>'yoga', 'num'=>'4']) !!}" class="btn btn-gray-transparent btn-animated btn-sm">View Events <i class="pl-10 fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                  
                        </div>                         
                    </div>                    
                </div>
            </section>
            <!-- section end -->
           
            <!-- section start -->
            <!-- ================ -->
            <section class="section default-bg clearfix padding-ver-clear">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 padding-bottom-clear pv-30">
                            <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                                <span class="icon without-bg"><i class="fa fa-heart-o"></i></span>
                                <div class="body">
                                    <h3 class="title">Love &amp; Happiness, Compassion</h3>
                                    <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
                                    <a class="link-dark" href="{{url('/about/legion')}}">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 padding-bottom-clear pv-30 dark-translucent-bg">
                            <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                                <span class="icon without-bg"><i class="fa fa-balance-scale"></i></span>
                                <div class="body">
                                    <h3 class="title">Balance, Focus, Intelligence</h3>
                                    <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
                                    <a class="link-dark" href="{{url('/about/legion')}}">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 padding-bottom-clear pv-30">
                            <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                                <span class="icon without-bg"><i class="fa fa-rocket"></i></span>
                                <div class="body">
                                    <h3 class="title">Making Winners</h3>
                                    <p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
                                    <a class="link-dark" href="{{url('/about/legion')}}">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
                
                       

            <!-- section start -->
            <section class="section clearfix" style="background-color: #eef3ea;">
                <div class="container">
                    <h2 style="text-shadow: 3px 3px 7px #3b5802;color: #abe02e;">Upcoming <strong>Events</strong></h2>
                    
                    <div class="separator-2"></div>
                    
                    <div class="row grid-space-10">

                        @if(count($upcomings))
                            @foreach($upcomings as $upcoming)
                                <div class="col-sm-6 col-md-3">
                                    <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                                        <div class="overlay-container">
                                            <img src="/{{$upcoming->img_url}}" alt="">
                                            <div class="overlay-to-top">
                                                <p class="small margin-clear"><em> <br> {{$upcoming->tagline}}</em></p>
                                            </div>
                                        </div>

                                        <div class="body">
                                            <h4>{{$upcoming->title}}</h4>
                                            <div class="separator"></div>
                                            <p>{{ \Illuminate\Support\Str::limit($upcoming->description, 40) }}</p>
                                            <a href="{!! route('eventdetail', ['num' => $upcoming->id]) !!}">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif
                        <div class="clearfix visible-sm"></div>
                        

                    </div>                    
                </div>
            </section>
            <!-- section end -->
            <section class="pv-40 ding-bottom-clear parallax dark-translucent-bg " style="background-image:url('images/home4.jpg');">
                <div class="container">
                    <div class="row">
                        <h2>Top <strong>Masters</strong></h2>                    
                        <div class="separator-2"></div> 
                        <div class="owl-carousel carousel-autoplay">
                            <div class="overlay-container" style="margin:40px;">
                                <img src="images/master2.png" alt="">
                                <div class="overlay-to-top">
                                    <div class="text">
                                        <h3 class="title">Margaret Crayz - <span class="small">Master</span></h3>
                                        <ul class="social-links circle margin-clear colored">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-container" style="margin:40px;">
                                <img src="images/master2.png" alt="">
                                <div class="overlay-to-top">
                                    <div class="text">
                                        <h3 class="title">Margaret Crayz - <span class="small">Legion</span></h3>
                                        <ul class="social-links circle margin-clear colored">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-container" style="margin:40px;">
                                <img src="images/master2.png" alt="">
                                <div class="overlay-to-top">
                                    <div class="text">
                                        <h3 class="title">Margaret Crayz - <span class="small">Master</span></h3>
                                        <ul class="social-links circle margin-clear colored">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-container" style="margin:40px;">
                                <img src="images/master2.png" alt="">
                                <div class="overlay-to-top">
                                    <div class="text">
                                        <h3 class="title">Margaret Crayz - <span class="small">Master</span></h3>
                                        <ul class="social-links circle margin-clear colored">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-container" style="margin:40px;">
                                <img src="images/master2.png" alt="">
                                <div class="overlay-to-top">
                                    <div class="text">
                                        <h3 class="title">Margaret Crayz - <span class="small">Legion</span></h3>
                                        <ul class="social-links circle margin-clear colored">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-container" style="margin:40px;">
                                <img src="images/master2.png" alt="">
                                <div class="overlay-to-top">
                                    <div class="text">
                                        <h3 class="title">Margaret Crayz - <span class="small">Master</span></h3>
                                        <ul class="social-links circle margin-clear colored">
                                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                                        
                        </div>
                    </div>
                </div>
            </section>
             
            <!-- section start -->
            <section class="section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="call-to-action well">
                                <h2 class="title">Make the best of your life.</h2>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p>Each event, each workshop you see here, has a spirit. The spirit of the individual who composed it and of the individuals who read it and lived and imagined with it. Each time a book changes hands, each time somebody runs his eyes down its pages, its soul develops and fortifies. When you end up needing profound sustenance, it is in the chances to serve others that you will discover the wealth you look for.</p>
                                    </div>

                                    <div class="col-sm-4 text-right">
                                        <a href="{{url('/auth/signup')}}" class="btn btn-lg btn-default btn-animated">Get Trial<i class="fa fa-arrow-right pl-20"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->


            <!-- section start -->

            <section class="pv-40 ding-bottom-clear parallax dark-translucent-bg " style="background-image:url('images/home4.jpg');">
                <div class="owl-carousel content-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="testimonial text-center">
                                    <div class="testimonial-image">
                                        <img src="/images/master9.jpeg" alt="Jane Doe" title="Jane Doe" class="img-circle">
                                    </div>

                                    <h3>Just Perfect!</h3>
                                    
                                    <div class="separator"></div>
                                    
                                    <div class="testimonial-body">
                                        <blockquote>
                                            <p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
                                        </blockquote>

                                        <div class="testimonial-info-1">- Amit Jairath</div>

                                        <div class="testimonial-info-2">By Company</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="testimonial text-center">
                                    <div class="testimonial-image">
                                        <img src="/images/master6.png" alt="Jane Doe" title="Jane Doe" class="img-circle">
                                    </div>

                                    <h3>Amazing!</h3>
                                    
                                    <div class="separator"></div>
                                    
                                    <div class="testimonial-body">
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
                                        </blockquote>

                                        <div class="testimonial-info-1">- Jane Doe</div>
                                        
                                        <div class="testimonial-info-2">By Company</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
@endsection