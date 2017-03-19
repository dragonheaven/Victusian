<style type="text/css">
	#secondblock {
		display: none;
	}
	a {
		color:white !important;
	}
	h4 {
		text-decoration: bold;
	}
	#back {		
		font-size: 20px;
		color: rgba(255, 255, 255, 0.3);
	}

	#back:hover {
		color: rgba(255, 255, 255, 1);	
	}
</style>
<div class="welcome-content" id="firstblock">

	<h2 class="title"><strong>What would you like to be?<strong></h2>
	<div class="row">
		<div class="col-sm-5 block">
			<a href="{{url('/profile/stuprofile')}}">
				<div class="imgbox">
					<img src="/images/signup/box_signup_student.png">
				</div>
				<h4><strong>Do you want to be a Student?</strong></h4>
			</a>				
		</div>
		<div class="col-sm-2 o-or-divider">OR</div>
		<div class="col-sm-5 block" id="choose">
			<a href="javascript:;">
				<div class="imgbox">
					<img src="/images/signup/box_teachers.png">	
				</div>
				<h4><strong>Be a Master or<br> Be a Legion?</strong></h4>
			</a>			
		</div>
	</div>
</div>

<div class="welcome-content" id="secondblock">	
	<h2 class="title"><strong>LEGION or MASTER?</strong></h2>
	<div class="row">
		<div class="col-sm-5 block">
			<a href="{{url('/profile/masterprofile')}}">
				<div class="imgbox">
					<img src="/images/signup/box_signup_master.png">
				</div>
				<h4><strong>Be a MASTER?</strong></h4>
			</a>				
		</div>
		<div class="col-sm-2 o-or-divider">OR</div>
		<div class="col-sm-5 block">
			<a href="{{url('/profile/legionprofile')}}">
				<div class="imgbox">
					<img src="/images/signup/box_signup_legion.png">	
				</div>
				<h4><strong>Be a LEGION?</strong></h4>
			</a>			
		</div>
	</div>
	<a href="javascript:;" id="back"><i class="fa fa-chevron-down"></i></a>
</div>
<script src="/dash_assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function () {
		$('#choose').on('click', function() {
			$('#firstblock').slideUp(1000);
			$('#secondblock').slideDown(1000).fadeIn();
		});

		$('#back').on('click', function() {
			$('#secondblock').slideUp(1000).fadeOut();
			$('#firstblock').slideDown(1000);
		});
	});
</script>