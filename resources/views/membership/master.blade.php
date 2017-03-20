@extends('layouts.signtemp')

@section('role')
Master
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div style="float:right">
			<a href="{{url('login')}}">Already have an account?</a>
		</div>
	</div>
	<div class="object-non-visible text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
		<!-- logo -->
		<div id="logo" class="logo">
			<h3 class="margin-clear"><a href="/" class="logo-font link-light"><span class="text-default">Victus</span>Network</a></h3>
		</div>
		<!-- name-and-slogan -->
		<p class="small">Subscribe your personal information</p>
		

		<div class="form-block center-block p-30 light-gray-bg border-clear text-left" style="background-color: rgba(0, 0, 0, 0.38); color: rgb(200, 241, 45);">

			<h3 class="title">Sign Up As a Master</h3>

			<form class="row form-horizontal" id="register_form" role="form" method="POST" action="{{ url('/register') }}">
				{{ csrf_field() }}
				<div class="col-md-6">
					<input type="hidden" name="roleid" value="3">   <!-- 3 for masters-->

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
							<input type="text" class="form-control" name="dob" id='datetimepicker3' value="{{ old('dob') }}" required>
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
							<i class="fa fa-child form-control-feedback"></i>											
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