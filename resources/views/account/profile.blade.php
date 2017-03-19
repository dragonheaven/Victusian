@extends('layouts.main')

@section('title')
Profile
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
				<h1 class="page-title">{{session('username')}}</h1>
				<div class="separator-2"></div>
				<!-- page-title end -->
				<div class="row">
					<div class="col-sm-4">
						<div class="image-box team-member shadow mb-20">
							<div class="overlay-container overlay-visible">
								@if(file_exists(session('userImageURL')))
									<img src="/{{session('userImageURL')}}" alt="">
									<a href="/{{session('userImageURL')}}" class="popup-img overlay-link" title="{{session('username')}} - Master"><i class="icon-plus-1"></i></a>
								@else
									<img src="/images/avatar.png" alt="">
									<a href="#" class="popup-img overlay-link" title="{{session('username')}} - Master"><i class="icon-plus-1"></i></a>
								@endif
								<div class="overlay-bottom">
									<div class="text">
										<h3 class="title margin-clear">{{session('username')}}</h3>
										@if(session('userrole') == 4)
											<p class="margin-clear">Student</p>
										@elseif(session('userrole') == 3)
											<p class="margin-clear">Master</p>
										@elseif(session('userrole') == 2)
											<p class="margin-clear">Legion</p>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nam, vitae autem quis, deserunt pariatur! At, atque inventore.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam esse laudantium maiores aperiam illo fugit laboriosam velit repellendus quod cumque ea vero vitae quo enim fugiat itaque harum assumenda aut quis, dolore. Sit reiciendis eligendi, recusandae eaque est optio reprehenderit!</p>
						
					</div>
					<div class="col-sm-3 col-lg-offset-1">
						<h3 class="title">Contact Me</h3>
						<ul class="list-icons">
							<li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
							<li><i class="fa fa-mobile pr-10 text-default"></i> +00 1234567890</li>
							<li><a href="mailto:info@janedoe.com"><i class="fa fa-envelope-o pr-10"></i>{{session('useremail')}}</a></li>
						</ul>
						<h3>My Event</h3>
						<div class="separator-2"></div>
						<a href="{{url('/event/createevent')}}" class="btn btn-animated btn-sm btn-default">Create new Event<i class="pl-10 fa fa-info"></i></a>						
					</div>
				</div>

			</div>
			<!-- main end -->

		</div>
	</div>
</section>
			<!-- main-container end -->
@endsection