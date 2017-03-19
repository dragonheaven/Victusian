@extends('layouts.signtemp')

@section('role')
Student
@endsection

@section('content')
<div class="container" id="signupchoose" style="{{ count($errors) > 0 ? 'display:none' : 'display:block'}}" >
	<div class="row">

		<!-- main start -->
		<!-- ================ -->
		<div class="main col-md-12">
			<div class="row">
				<div style="float:right">
					<a href="{{url('login')}}">Already have an account?</a>

				</div>
			</div>
			<!-- page-title start -->
			<!-- ================ -->
			<h1 class="page-title">Choose your membership plan</h1>
			<div class="separator-2"></div>
			<!-- page-title end -->

			<!-- pricing tables start -->
			<!-- ================ -->
			<div class="pricing-tables circle-head object-non-visible" data-animation-effect="fadeInUpSmall"  data-effect-delay="0">
				
				<div class="row grid-space-10">
					<div class="col-sm-4">
						<!-- pricing table start -->
						<!-- ================ -->
						<div class="plan shadow light-gray-bg bordered">
							<div class="header dark-bg" style="background: #7bd01e;">
								<h3>Free</h3>
								<div class="price"><span>Trial</span></div>
							</div>
							<ul>
								<li>
									<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Any users can visit anywhere and see blogs, join any events for 3 trial tickets." title="" data-original-title="Can visit anywhere" data-trigger="hover">Enjoy site</a>
								</li>
								<li>
									<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Free Trial Tickets can only only time per workshop. After the free trials, you will pay the standard fee." title="" data-original-title="3 Free Tickets">Get 3 Free Tickets</a>
								</li>
								<li>Share with friends via social</li>
								<li>User experiences</li>
								<li>Get info from blog</li>
								<li><a class="btn btn-default btn-animated btn-lg radius-50 subscribe" style="background: #7bd01e; border-color: #65b909;">Subscribe <i class="fa fa-user"></i></a></li>
							</ul>
						</div>
						<!-- pricing table end -->
					</div>
					<div class="col-sm-4">
						<!-- pricing table start -->
						<!-- ================ -->
						<div class="plan shadow light-gray-bg bordered best-value">
							<div class="header default-bg">
								<h3>Basic</h3>
								<div class="price"><span>5€</span>/m.</div>
							</div>
							<ul>											
								<li>
									<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Any users can visit anywhere and see blogs, join any events." title="" data-original-title="Can visit anywhere" data-trigger="hover">Enjoy site</a>
								</li>        
								<li>Can give comments for events</li>
								<li>Post blogs</li>
								<li>Can share pictures to with social</li>
								<li>Can join friends to events.</li>
								<li><a class="btn btn-default btn-animated btn-lg radius-50 subscribe">Subscribe <i class="fa fa-user"></i></a></li>
							</ul>
						</div>
						<!-- pricing table end -->
					</div>
					<div class="col-sm-4">
						<!-- pricing table start -->
						<!-- ================ -->
						<div class="plan shadow light-gray-bg bordered">
							<div class="header dark-bg" style="background: #7042dc;">
								<h3>Premium</h3>
								<div class="price"><span>25€</span>/m.</div>
							</div>
							<ul>												
								<li>
									<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Any users can visit anywhere and see blogs, join any events." title="" data-original-title="Can visit anywhere" data-trigger="hover">Enjoy site</a>
								</li>
								<li>
									<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Terms of trial is one month for Premium Students" title="" data-original-title="1 month Trial" data-trigger="hover">1 month Trial</a>
								</li>												
								<li>Can join any events</li>
								<li>Can give comments for events</li>
								<li>Can Post Blog</li>
								<li><a class="btn btn-primary radius-50 btn-animated btn-lg subscribe" style="background: #7042dc;">Subscribe <i class="fa fa-user"></i></a></li>
							</ul>
						</div>
						<!-- pricing table end -->
					</div>
				</div>
			</div>
			<!-- pricing tables end -->

			
		</div>
		<!-- main end -->

	</div>
</div>
<!-- Container end-->

<div class="container" id="signupsubscribe" style="{{ count($errors) > 0 ? 'display:block' : 'display:none'}}" >
	<div class="row">
		<div style="float:right">
			<a href="{{url('login')}}">Already have a account?</a>
		</div>
	</div>
	<div class="object-non-visible text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
		<!-- logo -->
		<div id="logo" class="logo">
			<h3 class="margin-clear"><a href="/" class="logo-font link-light"><span class="text-default">Victus</span>Network</a></h3>
		</div>
		<!-- name-and-slogan -->
		<p class="small">Subscribe your personal information</p>
		<div class="form-block center-block p-30 light-gray-bg border-clear text-left" style="background-color: rgba(0, 0, 0, 0.38); color: rgb(200, 241, 45)">

			<h3 class="title">Sign Up As a Student</h3>

			<form class="row form-horizontal" id="register_form" role="form" method="POST" action="{{ url('/register') }}">
				{{ csrf_field() }}
				<div class="col-md-6">
					<input type="hidden" name="roleid" value="4">   <!-- 4 for students-->

					<div class="form-group has-feedback">
						<label for="inputName" class="col-sm-3 control-label">FullName <span class="text-danger small">*</span></label>
						<div class="col-sm-4{{ $errors->has('firstName') ? ' has-error' : '' }}">
							<input type="text" class="form-control" id="inputFirstName" name="firstName" placeholder="First Name" value="{{ old('firstName') }}" required>
							<i class="fa fa-pencil form-control-feedback"></i>
							@if ($errors->has('firstName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firthName') }}</strong>
                                </span>
                            @endif										
						</div>

						<div class="col-sm-4{{ $errors->has('lastName') ? ' has-error' : '' }}">
							<input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}"required>
							<i class="fa fa-pencil form-control-feedback"></i>
							@if ($errors->has('lastName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                            @endif
						</div>
					</div>								

					<div class="form-group has-feedback{{ $errors->has('displayName') ? ' has-error' : '' }}">
						<label for="inputUserName" class="col-sm-3 control-label">Display Name <span class="text-danger small">*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="inputUserName" name="displayName" placeholder="Display Name" value="{{old('displayName')}}" required>
							<i class="fa fa-user form-control-feedback"></i>
							@if ($errors->has('displayName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('displayName') }}</strong>
                                </span>
                            @endif
						</div>
					</div>

					<div class="form-group has-feedback{{ $errors->has('dob') ? ' has-error' : '' }}">
						<label for="inputDOB" class="col-sm-3 control-label">Date of Birth <span class="text-danger small">*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="dob" id='datetimepicker3' value="{{ old('dob') }}" style="color:red" required>
							<!-- <input type="date" class="form-control" id="inputDOB" name="dob" placeholder="2001-01-20" required> -->
							<i class="fa fa-calendar form-control-feedback"></i>
							@if ($errors->has('dob'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                            @endif
						</div>
					</div>

					<div class="form-group has-feedback">
						<label for="selectGender" class="col-sm-3 control-label">Gender <span class="text-danger small">*</span></label>
						<div class="col-sm-8">
							<select class="form-control" id="selectGender" name="gender">
								<option value="0">Male</option>
								<option value="1">Female</option>
							</select>
							<i class="fa fa-spinner form-control-feedback"></i>											
						</div>
					</div>

					<div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="inputEmail" class="col-sm-3 control-label">Email <span class="text-danger small">*</span></label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="{{ old('email') }}" required>
							<i class="fa fa-envelope form-control-feedback"></i>
							@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
					</div>

					<div class="form-group has-feedback">
						<label for="inputPassword" class="col-sm-3 control-label">Password <span class="text-danger small">*</span></label>
						<div class="col-sm-4{{ $errors->has('password') ? ' has-error' : '' }}">
							<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
							<i class="fa fa-lock form-control-feedback"></i>
							@if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
						<div class="col-sm-4{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm" required>
							<i class="fa fa-lock form-control-feedback"></i>
							@if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
						</div>
					</div>		

					<div class="form-group has-feedback">
						<label for="selectHobby" class="col-sm-3 control-label">Hobby </label>
						<div class="col-sm-8">
							<select class="form-control" id="selectHobby" name="hobby">
								<option value="0">Yoga</option>
								<option value="1">Dance</option>
								<option value="2">Film</option>
								<option value="3">Cooking</option>
								<option value="4">Creative Activities</option>
							</select>
							<i class="fa fa-child form-control-feedback"></i>
						</div>
					</div>

					<div class="form-group has-feedback">
						<label for="selectTodo" class="col-sm-3 control-label">I'd like to </label>
						<div class="col-sm-8">
							<select class="form-control" id="selectTodo" name="idliketo">
								<option value="0">Become holistically fit</option>
								<option value="1">Meet new people</option>
								<option value="2">Just try and see</option>
								<option value="3">Get my friends to join for new activites</option>
							</select>
							<i class="fa fa-child form-control-feedback"></i>
						</div>
					</div>
					
				</div>


				<div class="col-md-6">
					<div class="form-group has-feedback">	
						<div class="col-sm-offset-5">																			  
						  	<div id="image-preview">
						  		<label for="image-upload" id="image-label">Choose File</label>
						  		<input type="file" id="image-upload" required/>
						 	</div>			
						 	<input type="button" class="btn btn-default btn-sm" value="Upload" id="btnUpload" style="width:150px">

						</div>
						

						<input type="hidden" id="image_upload_url" value="{{ url('/image-upload') }}">
						<input type="hidden" id="image_upload" name="image" required>
					</div>

					<div class="form-group has-feedback">
						<label for="textMotto" class="col-sm-3 control-label">Life motto...</label>
						<div class="col-sm-8">
							<textarea class="form-control" rows="3" id="textMotto"  name="motto"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-8">
							<div class="checkbox">
								<label>
									<input type="checkbox" required> Accept our <a href="#">privacy policy</a> and <a href="#">customer agreement</a>
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-8 col-sm-3">
							<button type="submit" class="btn btn-group btn-default btn-animated" id="sign_up">Sign Up <i class="fa fa-check"></i></button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- .subfooter start -->
		<!-- ================ -->
		<p class="mt-20"><a target="_blank" href="{{url('/about/victusian')}}">AboutUs</a></p>
		<!-- .subfooter end -->
	</div>
</div>

@endsection				