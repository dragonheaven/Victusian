@extends('layouts.main')

@section('title')
Event Details
@endsection

@section('content')
<div class="main-container">
	<div class="container">
		<a href="{{ url('/workshops/all/0')}}"><  Back to List</a>
		<div class="row">
			<div class="main col-md-12">
				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title">Yoga Activity</h1>
				<div class="separator-2"></div>
				<!-- page-title end -->

				<div class="row">
					<div class="col-md-8">
						<!-- pills start -->
						<!-- ================ -->
						<!-- Nav tabs -->
						<ul class="nav nav-pills" role="tablist">
							<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
							<li><a href="#pill-2" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content clear-style">
							<div class="tab-pane active" id="pill-1">
								<div class="owl-carousel content-slider-with-large-controls owl-theme" style="opacity: 1; display: block;">
									<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 1432px; left: 0px; display: block;"><div class="owl-item" style="width: 358px;"><div class="overlay-container overlay-visible">
										<img src="/images/event2.jpg" alt="">
										<a href="images/event2.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
									</div></div><div class="owl-item" style="width: 358px;"><div class="overlay-container overlay-visible">
										<img src="images/event1.jpg" alt="">
										<a href="/images/event1.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
									</div></div></div></div>
									
								<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev">prev</div><div class="owl-next">next</div></div></div></div>
							</div>
							<div class="tab-pane" id="pill-2">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
									<p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
								</div>
							</div>
						</div>
						<!-- pills end -->
						<div class="clearfix mb-20">
							<span>
								<i class="fa fa-star text-default"></i>
								<i class="fa fa-star text-default"></i>
								<i class="fa fa-star text-default"></i>
								<i class="fa fa-star text-default"></i>
								<i class="fa fa-star"></i>
							</span>
							<span>  4.5 </span>
							<span>Based on 10 reviews</span>							
							<ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
								<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
								<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 pv-30">

						<h2>Description</h2>
						<p class="middle mb-10"><i class="icon-calendar"></i> Feb, 2017 <i class="pl-10 icon-globe"></i> Venevello</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem debitis enim facilis porro quia in voluptates praesentium, cupiditate, dolorum. Facilis minus, quidem! Id perspiciatis labore praesentium voluptatibus assumenda odio, magni.</p>
						<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sint beatae delectus obcaecati eveniet nulla voluptate odio est laborum veniam? Natus nemo provident, voluptate molestias sint, nam dolor blanditiis minus!</p>
						<hr class="mb-10">
						
						<div class="light-gray-bg p-20 bordered clearfix">
							<span class="product price"><i class="icon-tag pr-10"></i>$99.00</span>
							<div class="product elements-list pull-right clearfix">
								<input type="submit" value="Join" class="margin-clear btn btn-default">
							</div>
						</div>
					</div>
				</div>

				<div class="separator-2"></div>

				<div class="image-box team-member style-3-b">
					<h2 class="title">Who teaches this event?</h2>
					<div class="row">
						<div class="col-sm-6 col-md-2 col-lg-2">
							<div class="overlay-container overlay-visible">
								<img src="images/master9.jpeg" alt="">
								<a href="images/master9.jpeg" class="popup-img overlay-link" title="John Doe - Legion"><i class="icon-plus-1"></i></a>								
							</div>
						</div>
						<div class="col-sm-6 col-md-10 col-lg-10">
							<div class="body">
								<h3 class="title margin-clear">John Doe - <small>Master</small></h3>
								<div class="separator-2 mt-10"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
								<ul class="social-links circle margin-clear colored">
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
								</ul>
								<br>
								<a href="tel:123123123123123" class="btn btn-gray-transparent"><i class="pr-10 margin-clear fa fa-phone"></i>Call</a>
								<a href="mailto:info@theproject.com" class="btn btn-gray-transparent"><i class="pr-10 margin-clear fa fa-envelope-o"></i>Contact</a>
							</div>
						</div>
						
					</div>
				</div>

				<!-- master show end-->

			</div>
		</div>
	</div>

	<!--Reviews start-->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs style-4" role="tablist">					
					<li class="active"><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3) Reviews</a></li>
					<li><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Add my review</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content padding-top-clear padding-bottom-clear">
					<div class="tab-pane fade in active" id="h2tab3">
						<!-- comments start -->
						<div class="comments margin-clear space-top">
							<!-- comment start -->
							<div class="comment clearfix">
								<div class="comment-avatar">
									<img class="img-circle" src="images/avatar.png" alt="avatar">
								</div>
								<header>
									<h3>Amazing!</h3>
									<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 12:31</div>
								</header>
								<div class="comment-content">
									<div class="comment-body clearfix">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
										<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div>
							</div>
							<!-- comment end -->

							<!-- comment start -->
							<div class="comment clearfix">
								<div class="comment-avatar">
									<img class="img-circle" src="images/avatar.png" alt="avatar">
								</div>
								<header>
									<h3>Really Nice!</h3>
									<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 10:31</div>
								</header>
								<div class="comment-content">
									<div class="comment-body clearfix">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
										<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div>
							</div>
							<!-- comment end -->

							<!-- comment start -->
							<div class="comment clearfix">
								<div class="comment-avatar">
									<img class="img-circle" src="images/avatar.png" alt="avatar">
								</div>
								<header>
									<h3>Worth to enjoy!</h3>
									<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 09:31</div>
								</header>
								<div class="comment-content">
									<div class="comment-body clearfix">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
										<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div>
							</div>
							<!-- comment end -->
						</div>
						<!-- comments end -->						
					</div>

					<div class="tab-pane fade" id="h2tab2">						
						<div class="comments-form">
							<h2 class="title">Add your Review</h2>
							<form role="form" id="comment-form">
								<div class="form-group has-feedback">
									<label for="name4">Name</label>
									<input type="text" class="form-control" id="name4" placeholder="" name="name4" required="">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="subject4">Subject</label>
									<input type="text" class="form-control" id="subject4" placeholder="" name="subject4" required="">
									<i class="fa fa-pencil form-control-feedback"></i>
								</div>
								<div class="form-group">
									<label>Rating</label>
									<select class="form-control" id="review">
										<option value="five">5</option>
										<option value="four">4</option>
										<option value="three">3</option>
										<option value="two">2</option>
										<option value="one">1</option>
									</select>
								</div>
								<div class="form-group has-feedback">
									<label for="message4">Message</label>
									<textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required=""></textarea>
									<i class="fa fa-envelope-o form-control-feedback"></i>
								</div>
								<input type="submit" value="Submit" class="btn btn-default">
							</form>
						</div>
					</div>					
				</div>
			</div>

			<!-- Related Events-->
			<aside class="col-md-4 col-lg-3 col-lg-offset-1">
				<div class="sidebar">
					<div class="block clearfix">
						<h3 class="title">Related Events</h3>
						<div class="separator-2"></div>
						<div class="media margin-clear">
							<div class="media-left">
								<div class="overlay-container">
									<img class="media-object" src="images/product-5.jpg" alt="blog-thumb">
									<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="media-body">
								<h6 class="media-heading"><a href="shop-product.html">Lorem ipsum dolor sit amet</a></h6>
								<p class="margin-clear">
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
								</p>
								<p class="price">$99.00</p>
							</div>
							<hr>
						</div>
						<div class="media margin-clear">
							<div class="media-left">
								<div class="overlay-container">
									<img class="media-object" src="images/product-6.jpg" alt="blog-thumb">
									<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="media-body">
								<h6 class="media-heading"><a href="shop-product.html">Eum repudiandae ipsam</a></h6>
								<p class="margin-clear">
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star"></i>
								</p>
								<p class="price">$299.00</p>
							</div>
							<hr>
						</div>
						<div class="media margin-clear">
							<div class="media-left">
								<div class="overlay-container">
									<img class="media-object" src="images/product-7.jpg" alt="blog-thumb">
									<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="media-body">
								<h6 class="media-heading"><a href="shop-product.html">Quia aperiam velit fuga</a></h6>
								<p class="margin-clear">
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star"></i>
								</p>
								<p class="price">$9.99</p>
							</div>
							<hr>
						</div>
						<div class="media margin-clear">
							<div class="media-left">
								<div class="overlay-container">
									<img class="media-object" src="images/product-8.jpg" alt="blog-thumb">
									<a href="shop-product.html" class="overlay-link small"><i class="fa fa-link"></i></a>
								</div>
							</div>
							<div class="media-body">
								<h6 class="media-heading"><a href="shop-product.html">Fugit non natus officiis</a></h6>
								<p class="margin-clear">
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star text-default"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</p>
								<p class="price">$399.00</p>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>

		
	</div>
</div>
@endsection