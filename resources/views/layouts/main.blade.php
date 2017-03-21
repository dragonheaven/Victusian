<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">

	  	<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title') | Victus Network</title>

		<!-- Favicon -->
		<!-- <link rel="shortcut png" href="/images/favicon.png"> -->
		<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">

		
		<!-- Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:700,400,300" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet" type="text/css">

		<!-- Bootstrap core CSS -->
		<!-- <link href="/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link href="/dash_assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- Font Awesome CSS -->
		<!-- <link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
		<link href="/dash_assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

		<!-- Fontello CSS -->
		<link href="/fonts/fontello/css/fontello.css" rel="stylesheet">
		<link href="/dash_assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
		<link href="/dash_assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
		<!-- END THEME GLOBAL STYLES -->
		<link href="/dash_assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />	


		<!-- Plugins -->
		<link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="/css/animations.css" rel="stylesheet">
		<link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="/plugins/hover/hover-min.css" rel="stylesheet">
		<link href="/plugins/morphext/morphext.css" rel="stylesheet">

		<link href="/dash_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="/dash_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- Bootstrap datepicker plugin -->
		<link rel="stylesheet" href="/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="/plugins/bootstrap-select/bootstrap-select.css" />
        

        <script type="text/javascript" src="/plugins/jquery.js"></script>
        <script type="text/javascript" src="/plugins/bootstrap-select/bootstrap-select.js"></script> 
		
		<!-- the project core CSS file -->
		<link href="/css/style.css" rel="stylesheet">


		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		
		<!-- <link href="/css/skins/vivid_red.css" rel="stylesheet"> -->
		<link href="/css/skins/light_blue.css" rel="stylesheet">
		<!-- <link href="/css/skins/cool_green.css" rel="stylesheet"> -->

		<!-- Custom css --> 
		<link href="/css/custom.css" rel="stylesheet">

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

		

		@stack('asset')		


	</script>
	</head>

	<!-- body classes -->
	<body class="no-trans front-page transparent-header-on page-loader-4">
		<!-- scrollToTop -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<div class="page-wrapper">
			<!-- header-container start -->
			<div class="header-container">
				<!-- header start -->
				<header class="header  fixed full-width  clearfix transparent-header-on">
					<!-- header-right start -->
					<div class="header-right clearfix">
						<!-- main-navigation start -->
						<div class="main-navigation animated with-dropdown-buttons">
							<!-- navbar start -->
							<nav class="navbar navbar-default" role="navigation" style="position:relative">
								<div class="container-fluid">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<!-- header-left start -->
										<div class="header-left clearfix" style="margin-left:50px">
											<!-- logo -->
											<div id="logo" class="logo">
												<a href="{{ url('/') }}"><img id="logo_img" src="/images/logo/logo.png" alt="Victus Network" style="height: 55px;"></a>
											</div>
										</div>
										<!-- header-left end -->													
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="navbar-collapse-1">
										<!-- main-menu -->
										<ul class="nav navbar-nav navbar-right">
											<!-- submenu start -->
											<li class="<?php if ($page == "home") echo 'active'; ?>"><a href="{{ url('/') }}">Home</a></li>
											<!-- submenu end -->
											
											<!-- submenu start -->
											<li class="dropdown <?php if (strpos($page, "about") !== FALSE) echo 'active'; ?> custom-dropdown">
												<a href="{{ url('/about/victusian') }}" class="dropdown-toggle" data-toggle="dropdown">What's Victusian?</a>
												<ul class="dropdown-menu">
													<li class="<?php if ($page == "about_legion") echo 'active'; ?>"><a href="{{ url('/about/legion') }}">Legion</a></li>
													<li class="<?php if ($page == "about_master") echo 'active'; ?>"><a href="{{ url('/about/master') }}">Master</a></li>
													<li class="<?php if ($page == "about_student") echo 'active'; ?>"><a href="{{ url('/about/student') }}">Student</a></li>
													<li class="<?php if ($page == "about_victusian") echo 'active'; ?>"><a href="{{ url('/about/victusian') }}">Victusian</a></li>
												</ul>
											</li>
											<!-- submenu end -->

											<!-- submenu start -->
											<li class="dropdown <?php if (strpos($page, "workshops") !== FALSE) echo 'active'; ?> custom-dropdown">
												<a href="{!! route('workshop', ['mode'=>'all', 'num'=>'0']) !!}" class="dropdown-toggle" data-toggle="dropdown">Workshops</a>
												<ul class="dropdown-menu">
													<li class="<?php if ($page == "workshops_coaching") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'coaching', 'num'=>'1']) !!}">Coaching</a></li>
													<li class="<?php if ($page == "workshops_creative") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'creative', 'num'=>'2']) !!}">Creative Activities</a></li>
													<li class="<?php if ($page == "workshops_dance") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'dance', 'num'=>'7']) !!}">Dancing</a></li>
													<li class="<?php if ($page == "workshops_film") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'film', 'num'=>'5']) !!}">Film</a></li>
													<li class="<?php if ($page == "workshops_music") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'music', 'num'=>'8']) !!}">Music</a></li>
													<li class="<?php if ($page == "workshops_yoga") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'yoga', 'num'=>'4']) !!}">Yoga</a></li>
													<li class="<?php if ($page == "workshops_cooking") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'cooking', 'num'=>'3']) !!}">Cooking</a></li>
													<li class="<?php if ($page == "workshops_economy") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'economy', 'num'=>'6']) !!}">New Economy</a></li>
													<li class="<?php if ($page == "workshops_fitness") echo 'active'; ?>"><a href="{!! route('workshop', ['mode'=>'fitness', 'num'=>'9']) !!}">Fitness</a></li>
												</ul>
											</li>
											<!-- submenu end -->

											<!-- submenu start -->
											<li class="<?php if ($page == "leaderboard") echo 'active'; ?>"><a href="{{url('/leaderboard')}}">Leaderboard</a></li>
											<!-- submenu end -->

											<!-- submenu start -->
											<li class="dropdown">
												<a href="" class="dropdown-toggle" data-toggle="dropdown">Soulcation & Fun</a>
												<ul class="dropdown-menu">
													<li><a href="">Recreational trip</a></li>
													<li><a href="">Sport trip</a></li>
													<li><a href="">Yoga & Meditation travel</a></li>
													<li><a href="">Soulcation travel</a></li>
												</ul>
											</li>
											<!-- submenu end -->
											

											<!-- submenu start -->
											<li class="<?php if ($page == "blog") echo 'active'; ?>"><a href="{{ url('/blog') }}">Blog</a></li>
											<!-- submenu end -->

											<!-- submenu start -->
											@if (Auth::guest())
											<li>
												<a href="{{url('/auth/signup')}}">JoinUs</a>															
											</li>
											@elseif(Auth::check() && session('userrole') == 4)
											<li><a href="{{ url('/calendar') }}">My Calendar</a></li>
											@elseif(session('userrole') == 3 || session('userrole') == 2)
											<li class="dropdown <?php if (strpos($page, "event") !== FALSE) echo 'active'; ?> custom-dropdown">
												<a class="dropdown-toggle" data-toggle="dropdown">Event</a>
												<ul class="dropdown-menu">
													<li class="<?php if ($page == "event_create") echo 'active'; ?>"><a href="{{url('/event/createevent')}}">Create New Event</a></li>
													<li class="<?php if ($page == "event_myevent") echo 'active'; ?>"><a href="{{url('/event/myevent')}}">My Events</a></li>															
												</ul>
											</li>
											@endif
											@if(Auth::check() && session('userrole') == 2)
											<li><a href="{{url('/oversee')}}">Oversee</a></li>											
											@endif
											<!-- submenu end -->
											@if(Auth::check())
											<li>
												<a class="dropdown-toggle" data-toggle="dropdown" style="color: #09afdf"><i class="fa fa-bell-o"></i><span class="badge badge-default"></span></a>
												<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart" style="text-align: center; padding 5px">
													<li class="notify-item">
														<p class="notify-text"></p>
													</li>
												</ul>
											</li>
											@endif
											<li>
												@if (Auth::check())
												<a class="dropdown-toggle" data-toggle="dropdown">
                                                	@if(file_exists(session('userImageURL')))
                                                		<img src="/{{ session('userImageURL') }}" class="img-circle" style="height: 30px; margin: -5px; display: inline-block;">
                                                	@else
                                                		<img src="/images/avatar/avatar.png" class="img-circle" style="height: 30px; margin: -5px; display: inline-block;">
                                                    @endif
                                                    <span>&nbsp;&nbsp;{{ session('username') }}</span>
												</a>
												<ul class="dropdown-menu">
													<li>
                                                        <a href="{{ url('/account/profile') }}">
                                                            <i class="fa fa-user"></i>
                                                            <span>My Profile</span>
                                                        </a>
                                                    </li>                                                                
                                                    
                                                    <li>
                                                        <a href="{{url('/logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                            <i class="fa fa-power-off"></i>
                                                            <span>Logout</span>
                                                        </a>
                                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
				                                            {{ csrf_field() }}
				                                        </form>
                                                    </li>														
												</ul>
												@else
												<a href="{{ url('/auth/login')}}" style="line-height: 20px;">
                                            		<img src="/images/avatar/avatar.png" class="img-circle" style="height: 30px; margin: -5px; display: inline-block;">
                                                	<span>&nbsp;&nbsp;Login</span>
                                                </a>
												@endif
											</li>
										</ul>
										<!-- main-menu end -->      
                                 
									</div>
								</div>
							</nav>
							<!-- navbar end -->
						</div>
						<!-- main-navigation end -->	
					</div>
					<!-- header-right end -->
						
					                   
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->

			<!-- login modal start -->
			<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="loginModalLabel">Login</h4>
						</div>

						<div class="modal-body">
							<form class="form-horizontal">
								<div class="form-group has-feedback">
									<label for="name" class="col-sm-3 control-label">User Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="name" name="name" placeholder="User Name" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group has-feedback">
									<label for="password" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
										<i class="fa fa-lock form-control-feedback"></i>
									</div>
								</div>

								<div class="form-group login-area">
									<div class="col-sm-offset-3 col-sm-8">
										<div class="checkbox">
											<label><input type="checkbox" name="remember"> Remember me</label>
										</div>											
										<span class="forget-password"><a >Forgot your password?</a></span>
										<button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
									</div>
								</div>

								<div class="form-group social-login-area">
									<div class="col-sm-offset-3 col-sm-8">
										<span class="text-center text-muted">Login with</span>
										<ul class="social-links colored circle clearfix">
											<li class="facebook"><a target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- login modal end -->
		
			@yield('content')
            
            <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
            <footer id="footer" class="clearfix">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-6">
									<div class="footer-content">
										<div class="logo-footer"><img id="logo-footer" src="images/logo/logo.png" alt=""></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore fugit vitae quia dicta inventore reiciendis. Ipsa, aut voluptas quaerat.</p>
										<ul class="list-inline mb-20">
											<li><i class="text-default fa fa-map-marker pr-5"></i> One infinity loop, 54100</li>
											<li><i class="text-default fa fa-phone pl-10 pr-5"></i> +00 1234567890</li>
											<li><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i> info@victusnetwork.com</a></li>
										</ul>
										<div class="separator-2"></div>
										<ul class="social-links circle margin-clear animated-effect-1">
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>											
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="footer-content">
										<h2 class="title">Contact Us</h2>
										<div class="alert alert-success hidden" id="MessageSent2">
											We have received your message, we will contact you very soon.
										</div>
										<div class="alert alert-danger hidden" id="MessageNotSent2">
											Oops! Something went wrong please refresh the page and try again.
										</div>
										<form role="form" id="footer-form" class="margin-clear">
											<div class="form-group has-feedback mb-10">
												<label class="sr-only" for="name2">Name</label>
												<input type="text" class="form-control" id="name2" placeholder="Name" name="name2">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback mb-10">
												<label class="sr-only" for="email2">Email address</label>
												<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback mb-10">
												<label class="sr-only" for="message2">Message</label>
												<textarea class="form-control" rows="4" id="message2" placeholder="Message" name="message2"></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Send" class="margin-clear submit-button btn btn-default">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="subfooter-inner">
							<div class="row">
								<div class="col-md-12">
									<p class="text-center">Copyright © 2017 by VictusNetwork. All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->
		</div>
		<!-- page-wrapper end -->


		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/plugins/modernizr.js"></script>

		<!-- jQuery Revolution Slider -->
		<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="/plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="/plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="/plugins/jquery.validate.js"></script>

        <!-- Google Maps javascript -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=true"></script>
        <script type="text/javascript" src="/js/google.map.config.js"></script>

		<!-- Morphext -->
		<script type="text/javascript" src="/plugins/morphext/morphext.min.js"></script>

		<!-- Background Video -->
		<script src="/plugins/vide/jquery.vide.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Pace javascript -->
		<script type="text/javascript" src="/plugins/pace/pace.min.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="/plugins/SmoothScroll.js"></script>

		<script type="text/javascript" src="/plugins/moment/min/moment.min.js"></script>
	  	<script type="text/javascript" src="/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

	  	
	  	
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/js/custom.js"></script>

		<script type="text/javascript">
			if(Auth::check())
			{
				if({{session('userrole')}} > 2)
				{
					setInterval(function(){
						$.ajax({
							url: '/getfeed',
			                type: 'POST',
			                data: {
			                        _token: "{{ csrf_token()}}",
			                    },
			                dataType: "text",
			                success: function(data) {
			                	var res = JSON.parse(data);
			                	if(res.length == 0)
			                	{
			                		$('.notify-text').text('No upcoming event');
			                	}	
			                	
			                    for (var idx = 0; idx < res.length; idx++) {
			                    	$('.cart').html('<li><p>You reserved a sit on '+ res[idx].title +'</p></li>');

			                    }
			                    if(res.length != 0) $('.badge').text(res.length);
			                }
						});
					},3600);
				}
				else if({{session('userrole')}} == 2)
				{
					setInterval(function() {
						$.ajax({
							url: '/getfeed2',
			                type: 'POST',
			                data: {
			                        _token: "{{ csrf_token()}}",
			                    },
			                dataType: "text",
			                success: function(data) {
			                	var res = JSON.parse(data);
			                	if(res.length == 0)
			                	{
			                		$('.notify-text').text('No new events');
			                	}
			                	for (var idx = 0; idx < res.length; idx++) {
			                    	$('.cart').html('<li><p>Master '+ res[idx].firstname +'Created new event</p></li>');

			                    }
			                    if(res.length != 0) $('.badge').text(res.length);
			                }
						});
					}, 2000);
				}
			}
		</script>
	</body>
</html>
