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
				<h1 class="page-title">{{$event->title}}</h1>
				<div class="separator-2"></div>
				<!-- page-title end -->
				<!-- @if(isset($state))
				<script type="text/javascript">
					alert('Congraturations! Thank you '+"{{$event->name}}");
				</script>
				@endif -->

				<!-- @include('flash::message') -->
				@if($errors->any() && $errors->first() == 'joined')
					<script type="text/javascript">
					    $('#flash-overlay-modal').modal();
					</script>
				@endif
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
								<div class="owl-carousel content-slider-with-large-controls">
									<div class="overlay-container overlay-visible">
										<img src="/{{$event->img_url}}" alt="">
										<a href="/{{$event->img_url}}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
									</div>
									<div class="overlay-container overlay-visible">
										<img src="/{{$event->img_url}}" alt="">
										<a href="/{{$event->img_url}}" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="pill-2">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
									<p><a href="http://vimeo.com/29198414">About</a> from <a href="http://vimeo.com/staff"> VictusNetwork</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
								</div>
							</div>
						</div>
						<!-- pills end -->
						<div class="clearfix mb-20">
							<span>
								@for($i=0;$i<$event->rate;$i++)								
								<i class="fa fa-star text-default"></i>
								@endfor
								@for($i=0;$i<(7-$event->rate);$i++)
								<i class="fa fa-star"></i>
								@endfor
							</span>
							<span> &nbsp {{5*round($event->rate*100/7)/100}} &nbsp</span>
							<span>Based on {{$event->reviewed}} reviews</span>							

							<ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
								<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
								<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
								<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 pv-30">

						<h2>About</h2>
						<p class="middle mb-10"><i class="icon-calendar"></i> {{$event->startdate}} ~ {{$event->expiredate}} <i class="pl-10 fa fa-map-marker"></i> {{$event->venue}}</p>
						
						<h3>{{$event->tagline}}</h4>
						<p>{{$event->description}}</p>

						<hr class="mb-10">

						@if($event->level_required == 0)
						<strong>Level Required: Beginner</strong>							
						@elseif($event->level_required == 1)
						<strong>Level Required: Medium</strong>
						@elseif($event->level_required == 2)
						<strong>Level Required: Advanced</strong>
						@endif

						<hr class="mb-10">

						@if($isjoined == false)
						<div class="light-gray-bg p-20 bordered clearfix">
							<span class="product price"><i class="icon-tag pr-10"></i> ‎€ {{$event->price}}</span>
							<div class="product elements-list pull-right clearfix">
								<button onclick="checkPaymentRegister()" value="Join" class="margin-clear btn btn-default btn-animated">Join<i class="fa fa-ticket"></i></button>
							</div>
						</div>
						@else
						<div class="light-gray-bg p-20 bordered clearfix">
							<span class="product price"><i class="fa fa-check pr-10"></i></span>
							<div class="product elements-list pull-right clearfix">
								<h5>You already joined this event</h>
							</div>
						</div>
						@endif
					</div>
				</div>

				<!--Drop confirmation Modal -->
				<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="myModalLabel"><i class="fa fa-ticket"></i>&nbsp  Buy Ticket</h4>
							</div>
							<div class="modal-body">										
								<div class="row">
									<div class="col-sm-6">
										<h5>Event Name</h5>
										<p class="margin-clear">{{$event->title}}</p>
										<h5> Event Venue</h5>
										<p class="margin-clear"><i class="fa fa-map-marker">&nbsp</i>{{$event->venue}}</p>
										<h5> When</h5>
										<p class="margin-clear"><i class="fa fa-calendar">&nbsp</i> {{$event->startdate}} ~ {{$event->expiredate}}</p>
									</div>
									<div class="col-sm-6">
										<img src="/{{$event->img_url}}">										
									</div>
								</div>

								<div class="separator-2"></div>

								<div class="row">
									<div class="col-sm-6">
										<h5>Event creator</h5>
										<p class="margin-clear"><i class="fa fa-user">&nbsp</i>{{$event->name}}</p>
									</div>
									<div class="col-sm-6">
										<h5>Price</h5>
										<p class="margin-clear"><i class="fa fa-money">&nbsp</i>{{$event->price}} €</p>
									</div>
								</div>	

								<div class="separator-2"></div>
								<div class="row">
									<div class="col-sm-12">
										<h5>Your payment information</h5>									
										<p class="margin-clear">Stripe account verified</p>
									</div>
								</div>				
							</div>
							
							<div class="modal-footer">
								<form action="{{url('/joinevent')}}" method="POST" style="margin:0px;">
								{{ csrf_field() }}
								<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Cancel</button>
								
								<input type="hidden" name="eventid" value="{{$event->id}}">
								<button type="submit" class="btn btn-sm btn-default drop-ok">Buy Ticket</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--End Confirmation Modal -->

				<div class="modal fade" id="confirmModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="myModalLabel"><i class="fa fa-ticket"></i>&nbsp;  Victus Network</h4>
							</div>
							<div class="modal-body">										
								<div class="row">
									<div class="col-sm-12">
										<h4><i class="fa fa-warning">&nbsp;</i>You have not set payment</h4>
										<p>Please set payment to continue activities.</p>
									</div>									
								</div>
							</div>
							
							<div class="modal-footer">
								<form action="{{url('/eventOrder')}}" method="POST" style="margin:0px auto;">
								{{ csrf_field() }}
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<script
										src="https://checkout.stripe.com/checkout.js" class="stripe-button"
										data-key="pk_test_Nlf6T59gFZyCPKTJSPo19Msx"
										data-name="Victusian"
										data-amount="{{$event->price*100}}"
										data-description="Join Event"
										data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
										data-locale="auto">
									</script>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--End Confirmation Modal -->

				<div class="separator-2"></div>

				<div class="image-box team-member style-3-b">
					<h2 class="title">Who teaches this event?</h2>
					<div class="row">
						<div class="col-sm-6 col-md-2 col-lg-2">
							<div class="overlay-container overlay-visible">
								@if(is_readable($event->image_url))
								<img src="/{{$event->image_url}}" alt="">
								<a href="/{{$event->image_url}}" class="popup-img overlay-link" title="{{$event->name}} - Legion"><i class="icon-plus-1"></i></a>
								@else
								<img src="/images/avatar.png" alt="">
								<a href="/images/avatar.png" class="popup-img overlay-link" title="{{$event->name}} - Legion"><i class="icon-plus-1"></i></a>
								@endif

							</div>
						</div>
						<div class="col-sm-6 col-md-10 col-lg-10">
							<div class="body">
								<h3 class="title margin-clear">{{$event->name}} - 
								@if($event->roleid == 3)
								<small>Master</small>
								@elseif($event->roleid == 2)
								<small>Legion</small>
								@endif
								</h3>
								<div class="separator-2 mt-10"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihialal. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam laudantium, provident culpa saepe.</p>
								<!-- <ul class="social-links circle margin-clear colored">
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
								</ul> -->
								<a href="tel:123123123123123" class="btn btn-gray-transparent"><i class="pr-10 margin-clear fa fa-phone"></i>Call</a>
								<a href="mailto:{{$event->email}}" class="btn btn-gray-transparent"><i class="pr-10 margin-clear fa fa-envelope-o"></i>Contact</a>
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
					<li class="active"><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Add my review</a></li>	
					<li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3) Reviews</a></li>
					
				</ul>
				<!-- Tab panes -->
				<div class="tab-content padding-top-clear padding-bottom-clear">
					<div class="tab-pane fade" id="h2tab3">
						<!-- comments start -->
						<div class="comments margin-clear space-top">
							<!-- comment start -->
							<div class="comment clearfix">
								<div class="comment-avatar">
									<img class="img-circle" src="/images/avatar.png" alt="avatar">
								</div>
								<header>
									<h3>Amazing!</h3>
									<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 12:31</div>
								</header>
								<div class="comment-content">
									<div class="comment-body clearfix">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
										<a href="javascript:;" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div>
							</div>
							<!-- comment end -->

							<!-- comment start -->
							<div class="comment clearfix">
								<div class="comment-avatar">
									<img class="img-circle" src="/images/avatar.png" alt="avatar">
								</div>
								<header>
									<h3>Really Nice!</h3>
									<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 10:31</div>
								</header>
								<div class="comment-content">
									<div class="comment-body clearfix">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
										<a href="javascript:;" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div>
							</div>
							<!-- comment end -->

							<!-- comment start -->
							<div class="comment clearfix">
								<div class="comment-avatar">
									<img class="img-circle" src="/images/avatar.png" alt="avatar">
								</div>
								<header>
									<h3>Worth to enjoy!</h3>
									<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 09:31</div>
								</header>
								<div class="comment-content">
									<div class="comment-body clearfix">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
										<a href="javascript:;" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div>
							</div>
							<!-- comment end -->
						</div>
						<!-- comments end -->						
					</div>

					<div class="tab-pane fade in active" id="h2tab2">						
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
										<option value="7">Ecstatic</option>
										<option value="6">Great</option>
										<option value="5">Good</option>
										<option value="4">Average</option>
										<option value="3">Just Ok</option>
										<option value="2">Boring</option>
										<option value="1">Very Bad</option>
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

			<!-- Group members-->
			<aside class="col-md-4 col-lg-3 col-lg-offset-1">
				<div class="sidebar">
					<div class="block clearfix" style="max-height:500px;overflow-y: auto">
						<h3 class="title">Group members</h3>
						<div class="separator-2"></div>
						@if(Auth::check())
							@if(count($users))
							@foreach($users as $user)
							<div class="media margin-clear">
								<div class="media-left">
									<div class="overlay-container">
										<img class="media-object" src="/{{$user->image_url}}" alt="blog-thumb" style="border: 1px solid transparent; border-radius: 50% !important;">
									</div>
								</div>
								<div class="media-body">
									<h6 class="media-heading">{{$user->name}}</h6>								
									<p class="price">Intermediate Level</p>
								</div>
								<hr>
							</div>
							@endforeach
							@else
							<h6 class="media-heading">No joined yet, please joint this event</h6>
							@endif
						@else
							<h6 class="media-heading">Only members can see his group,please join us</h6>
							<a href="{{url('auth/signup')}}" class="btn btn-animated btn-default">Get Trial<i class="fa fa-arrow-right pl-20"></i></a>
						@endif
						
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
	function checkPaymentRegister() {
		$.ajax({
			url: '/checkPaymentRegister',
            type: 'POST',
            data: {
                    _token: "{{ csrf_token()}}",
                },
            dataType: "text",
            success: function(data) {
            	if(data == "yes")
            	{
            		$('#confirmModal').modal();
            	}
            	else 
            	{
            		$('#confirmModal2').modal();
            	}
            }
		});
	}
</script>		
		

@endsection