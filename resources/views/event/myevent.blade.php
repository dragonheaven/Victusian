@extends('layouts.main')

@section('title')
My Events
@endsection

@section('content')
<div class="banner pv-40 ding-bottom-clear parallax dark-translucent-bg" style="background-image:url('/images/workshop.jpg');">				
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20">
				<h1 class="title">My <strong>Events</strong></h1>
				<div class="separator mt-10"></div>
				<h3>{{session('username')}}</h3>		
			</div>
		</div>
	</div>			
</div>

<!-- events panel start-->
 @if(session('status') == 'success')
<script type="text/javascript">
    alert('New event successfully created!');
</script>
@endif
<section class="section light-bg clear-fx">
	<div class="container">
		<a href="{{ url('/') }}">< Back home</a>
		<div class="row">
	    	<!-- sidebar start-->
	    	<div class="col-sm-3">
	    		<div class="sidebar">
    				<div class="portlet light ">
    					<a href="{{url('/event/createevent')}}" class="btn btn-outline red-mint  uppercase" data-placement="top">Create New Event</a>
    					
                        <div class="portlet-title">                        	
                            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content-tags">
                                <span class="caption-subject font-red bold uppercase">State </span>
                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view</span>
                            </div>                                            
                        </div>
                        <div class="portlet-body todo-project-list-content todo-project-list-content-tags">
                            <div class="todo-project-list">
                                <ul class="nav nav-pills nav-stacked">                                                    
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-info" id="nProcessing"> {{$nProcessing}} </span> In Process </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-success" id="nCompleted"> {{$nCompleted}} </span> Completed </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-warning" id="nClosed"> {{$nClosed}} </span> Closed </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge badge-default" id="nArchived"> {{$nArchived}} </span> Archived </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
	    		</div>
	    	</div>

	    	<!-- event content start-->
	    	<div class="main col-sm-9">
							

				@if(count($events) > 0)
				@foreach($events as $event)
				<div class="listing-item mb-20 light-gray-bg" id="{{$event->id}}">
					<div class="row grid-space-0">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="overlay-container">
								
								@if(file_exists($event->img_url))
								<img src="/{{$event->img_url}}" alt="">
								@else
								<img src="/images/event1.jpg" alt="">
								@endif
								<a class="overlay-link" href="javascript:;"><i class="fa fa-plus"></i></a>
								<!-- <span class="badge">TopRated</span> -->
							</div>
							<p class="pl-10">								
								@for($i = 0;$i < $event->rate;$i ++)
								<i class="fa fa-star text-default"></i>
								@endfor
								@for($i = 0;$i < (7-$event->rate);$i ++)
								<i class="fa fa-star-o"></i>
								@endfor	
								<br>				
								{{$event->reviewed}} &nbsp Reviewed	
								<br>
								{{$event->visited}} &nbsp Joined	
							</p>
							<span class="pl-10">
								
							</span>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="body">
								<h3 class="margin-clear"><strong>{{$event->title}}</strong></h3>
								<h5>{{$event->tagline}}</h5>								
								<div class="separator-2 mt-10"></div>
								<p>{{$event->description}}</p>
								<div class="elements-list clearfix">									
									<button class="btn btn-sm btn-default-transparent complete-button" data-toggle="modal" data-target="#confirmModal" data-id="{{$event->id}}">
										Complete
									</button>
									<button class="btn btn-sm btn-default-transparent drop-button" data-toggle="modal" data-target="#confirmModal" data-id="{{$event->id}}">
										Drop
									</button>

								</div>								
							</div>

						</div>

						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="body">
								<h5 class="margin-clear center">WHEN</h5>
								<h6>{{$event->expiredate}}</h6>																
								<div class="separator-2 mt-10"></div>

								<h5 class="margin-clear center">Level Required</h5>
								@if($event->level_required == 0)								
								<h6>Beginner</h6>
								@elseif($event->level_required == 1)
								<h6>Medium</h6>
								@elseif($event->level_required == 2)
								<h6>Advanced</h6>
								@endif
								<div class="separator-2 mt-10"></div>

								<h5 class="margin-clear center">Location</h5>
								<h6>{{$event->venue}}</h6>
							</div>
						</div>						
					</div>
				</div>
				
				@endforeach
				@else
				<div class="alert alert-info alert-dismissible">
					<h5>No events reserved for you. Please Create new event.</h5>					
				</div>
				@endif

				
				<!-- pagination start -->
				<!-- <nav class="text-center">
					<ul class="pagination">
						<li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</nav> -->
				<!-- pagination end -->
			</div>
			<!--Drop confirmation Modal -->
			<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title" id="myModalLabel">Victus Network</h4>
						</div>
						<div class="modal-body" style="font-size: 20px">										
							<i class="fa fa-warning"></i>
							<span id="question">Are you sure want to finish this event?</span>										
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Cancel</button>
							<button onclick="javascript:delete_event()" type="button" class="btn btn-sm btn-default drop-ok" data-dismiss="modal">Ok</button>
						</div>
					</div>
				</div>
			</div>
			
	    </div>
	</div>
</section>

<script type="text/javascript">
	var id;
	var mode;
	$('.drop-button').on('click', function () {
		id = $(this).attr('data-id');
		mode  = 2;
		$('#question').text('Are you sure to drop this event?');
	});

	$('.complete-button').on('click', function() {
		id = $(this).attr('data-id');
		mode = 1;
		$('#question').text('Would you like to complete this event?');
	});

	function delete_event(){
        $.ajax({
              type: 'POST',
              url: "{{ url('/') }}/event/dropEvent",
              data: {
                        _token:"{{ csrf_token()}}",
                        id:id,
                        mode:mode
                    },
              dataType: "text",
              success: function(data) { 
                if (data == 'success') {         
                    $('#nProcessing').text($('#nProcessing').text() - 1);
                    $('#'+id).remove();           
                    if(mode == 1)
                    {
                        $('#nCompleted').text(parseInt($('#nCompleted').text(), 10) + 1);
                        alert('Event successfully completed!');
                    }
                    if(mode == 2)
                    {
                        $('#nClosed').text(parseInt($('#nClosed').text(), 10) + 1);
                        alert('Event is closed');
                    }
                }
                else alert('Operation failed because of some issues...');
              }
        });
    }
</script>

@endsection