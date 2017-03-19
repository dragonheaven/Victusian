@extends('layouts.auth')

@section('title')
Authenticate
@endsection

@push('css')
<link href="/dash_assets/pages/css/login-4.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')	
	
	
	@if($page == 'login')
	 	@include('include.auth.loginform')
	@elseif($page == 'signup')
		@include('include.auth.signupform')
	@elseif($page == 'choose')
		@include('include.auth.chooseform')
	@elseif($page == 'reset')
		@include('include.auth.resetform')
	@elseif($page == 'welcome')
		@include('include.auth.welcomeform')
	@endif	
    
@endsection

@push('script')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- <script src="/dash_assets/pages/scripts/login-4.min.js" type="text/javascript"></script> -->
<!-- END PAGE LEVEL SCRIPTS -->
@endpush

