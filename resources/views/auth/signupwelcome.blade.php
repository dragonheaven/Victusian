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

		<title>Be a @yield('role') | Victus Network</title>

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

        <script type="text/javascript" src="/plugins/jquery.js"></script>
		
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
		<div class="page-wrapper" style="background: url('/dash_assets/pages/media/bg/3.jpg'); background-size:cover; height:100%">		
			

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container" style="overflow: auto;">
				
				<div class="container">
					<div class="row">
						<div style="max-width:800px; margin:20% auto">
							<p style="text-align:center"><h1>Welcome to Victus Website!</h1></p>
							<p><h4>We already have sent you verification email.</h4></p>
							<p><h5>Please verify your email and login again.</h5></p>
						</div>
					</div>
				</div>
			</section>
			<!-- main-container end -->
			
		</div>
		
		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/js/template.js"></script>

		<script type="text/javascript" src="/js/custom.js"></script>

		<script type="text/javascript">
		$(function() {
			$('.page-wrapper').height($('body').height() - $('footer').height());
			$('.main-container').height($('.page-wrapper').height() - $('.breadcrumb-container').height() - 100);
		});
		</script>
	</body>
</html>
