@extends('layouts.main')

@section('title')
    Travel
@endsection

@section('content')
    <div class="banner dark-translucent-bg" style="background-image:url('/images/travel/travel1.png');">
        <!-- section start -->
        <!-- ================ -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 space-bottom">
                    <div class="title large_white object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">Soulcation & fun</div>
                    <p class="text-center lead object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">Change yourself to change the world</p>
                    <div class="separator object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center pv-40 hidden-xs">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- section end -->
    </div>

    <!-- events panel start-->

    <section class="section light-bg clear-fx">
        <div class="container">
            <a href="{{ url('/') }}">< Back home</a>
            <div class="row">

                <!-- event content start-->
                <div class="main col-sm-12">

                    <div class="listing-item mb-20 light-gray-bg">
                        <div class="row grid-space-0">
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <div class="overlay-container">
                                    <img src="/images/travel/personaltravel.jpg" alt="">
                                    <a class="overlay-link" href="javascript:;"><i class="fa fa-plus"></i></a>
                                    <!-- <span class="badge">TopRated</span> -->
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="body">
                                    <h2 class="margin-clear"><a href=""><strong>Test Travel</a></h2>
                                    <h5>Tagline goes here</h5>
                                    <div class="separator-2 mt-10"></div>
                                    <p>Lorem ipsum dolar sit amet</p>
                                    <div class="elements-list clearfix">
                                        <span class="price">€ 70</span>
                                        <a href="javascript:;" class="pull-right btn btn-sm btn-default-transparent btn-animated">More<i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="listing-item mb-20 light-gray-bg">
                        <div class="row grid-space-0">
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <div class="overlay-container">
                                    <img src="/images/travel/travel4.jpg" alt="">
                                    <a class="overlay-link" href="javascript:;"><i class="fa fa-plus"></i></a>
                                    <!-- <span class="badge">TopRated</span> -->
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="body">
                                    <h2 class="margin-clear"><a href=""><strong>Test Travel</a></h2>
                                    <h5>Tagline goes here</h5>
                                    <div class="separator-2 mt-10"></div>
                                    <p>Lorem ipsum dolar sit amet</p>
                                    <div class="elements-list clearfix">
                                        <span class="price">€ 70</span>
                                        <a href="javascript:;" class="pull-right btn btn-sm btn-default-transparent btn-animated">More<i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="listing-item mb-20 light-gray-bg">
                        <div class="row grid-space-0">
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <div class="overlay-container">
                                    <img src="/images/travel/travel3.jpg" alt="">
                                    <a class="overlay-link" href="javascript:;"><i class="fa fa-plus"></i></a>
                                    <!-- <span class="badge">TopRated</span> -->
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="body">
                                    <h2 class="margin-clear"><a href=""><strong>Test Travel</a></h2>
                                    <h5>Tagline goes here</h5>
                                    <div class="separator-2 mt-10"></div>
                                    <p>Lorem ipsum dolar sit amet</p>
                                    <div class="elements-list clearfix">
                                        <span class="price">€ 70</span>
                                        <a href="javascript:;" class="pull-right btn btn-sm btn-default-transparent btn-animated">More<i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection