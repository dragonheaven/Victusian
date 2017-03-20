<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">

	  	<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Log In | Victus Network</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="/images/favicon.ico">

		<!-- Web Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Raleway:700,400,300" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet" type="text/css">

		<!-- Bootstrap core CSS -->
		<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="/fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="/css/animations.css" rel="stylesheet">
		<link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="/plugins/hover/hover-min.css" rel="stylesheet">
		<link href="/plugins/morphext/morphext.css" rel="stylesheet">

		<!-- Bootstrap datepicker plugin -->
		<link rel="stylesheet" href="/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="/plugins/bootstrap-select/bootstrap-select.css" />

        <script type="text/javascript" src="/plugins/jquery.js"></script>
        <script type="text/javascript" src="/plugins/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="/plugins/bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"></script>
		
		<!-- the project core CSS file -->
		<link href="/css/style.css" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="/css/skins/light_blue.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="/css/custom.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper" style="background: url('/images/blog2.jpg'); background-size:cover; height:100%">		
			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active">Log in</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container" style="overflow: auto;">

				
				<div class="container">
					<div class="row">
						<div style="float:right">
							<a href="{{url('/signup/student')}}">Do you have not account?</a>
						</div>
					</div>
					<div class="object-non-visible text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						<!-- logo -->
						<div id="logo" class="logo">
							<h3 class="margin-clear"><a href="/" class="logo-font link-light"><span class="text-default">Victus</span>Network</a></h3>
						</div>
						<!-- name-and-slogan -->
						<p class="small">Input Login information</p>
						<div class="form-block center-block p-30 light-gray-bg border-clear text-left" style="max-width: 500px;background-color: rgba(0, 0, 0, 0.38); color: rgb(200, 241, 45)">

							<h3 class="title">Log in</h3>

							<form class="row form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
								{{ csrf_field() }}						
										
									<div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="inputEmail" class="col-sm-3 control-label">Email </label>
										<div class="col-sm-8" style="display:block">
											<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value=" {{old('email')}} " required>
											<i class="fa fa-envelope form-control-feedback"></i>
											@if ($errors->has('email'))
			                                    <span class="help-block">
			                                        <strong>{{ $errors->first('email') }}</strong>
			                                    </span>
			                                @endif
										</div>

									</div>
									<div class="form-group has-feedback">
										<label for="inputPassword" class="col-sm-3 control-label">Password </label>
										<div class="col-sm-8">
											<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
											<i class="fa fa-lock form-control-feedback"></i>											
										</div>																			
									</div>				

									<div class="form-group{{ $errors->has('verified') ? ' has-error' : '' }}">
		                                @if ($errors->has('verified'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('verified') }}</strong>
		                                    </span>
		                                @endif
		                            </div>

									<div class="form-group login-area">
										<div class="col-sm-offset-3 col-sm-8">
											<div class="checkbox">
												<label><input type="checkbox" name="remember"> Remember me</label>
											</div>											
											<a href="" class="btn-link mar-rgt">Forgot password?</a>                        					
											
										</div>
									</div>

									<div class="form-group login-area">
										<div class="col-sm-offset-3 col-sm-8">
											<button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
										</div>
									</div>

									<div class="form-group social-login-area">
										<div class="col-sm-offset-3 col-sm-8">
											<span class="text-center text-muted">Login with</span>
											<ul class="social-links colored circle clearfix">
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
							</form>
						</div>						
					</div>
				</div>
			</section>
			<!-- main-container end -->
			
			
			
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix" style="position:fixed; bottom:0; width:100%;">

				<!-- .footer start -->
				<!-- ================ -->
				
				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="subfooter-inner">
							<div class="row">
								<div class="col-md-12">
									<p class="text-center">Copyright © 2017 Victus Network by Alfredo</a>. All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->
			
		</div>
		


		
		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

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
		

		<!-- Contact form -->
		<script src="/plugins/jquery.validate.js"></script>

     

		<!-- Morphext -->
		<script type="text/javascript" src="/plugins/morphext/morphext.min.js"></script>


		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/js/template.js"></script>

		

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/js/custom.js"></script>

		
	</body>
</html>
