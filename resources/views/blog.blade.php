@extends('layouts.main')

@section('title')
Blog
@endsection

@section('content')
		<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Blog from our students and clients</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<!-- blogpost start -->
							<article class="blogpost">
								<div class="row grid-space-10">
									<div class="col-md-6">
										<div class="overlay-container">
											<img src="images/blog1.jpg" alt="">
											<a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
										</div>
									</div>
									<div class="col-md-6">
										<header>
											<h2><a href="#">Innerpeace</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">09</span>
													<span class="month">May 2017</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit impedit nobis odio provident dolores assumenda commodi cum accusantium aspernatur voluptate. Inventore est optio laborum excepturi, voluptatum necessitatibus facilis eos dicta!</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste labore, sapiente laudantium est.</p>
										</div>
									</div>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="blogpost">
								<div class="row grid-space-10">
									<div class="col-md-6">
										<div class="overlay-container">
											<img src="images/blog2.jpg" alt="">
											<a class="overlay-link" href="#"><i class="fa fa-link"></i></a>
										</div>
									</div>
									<div class="col-md-6">
										<header>
											<h2><a href="#">Cute Robot</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">09</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit impedit nobis odio provident dolores assumenda commodi cum accusantium aspernatur voluptate. Inventore est optio laborum excepturi, voluptatum necessitatibus facilis eos dicta!</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste labore, sapiente laudantium est.</p>
										</div>
									</div>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
								</footer>
							</article>
							<!-- blogpost end -->


							<!-- pagination start -->
							<nav>
								<ul class="pagination">
									<li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav>
							<!-- pagination end -->

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
@endsection