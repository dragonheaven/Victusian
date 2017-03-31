@extends('layouts.main')

@section('title')
Calendar
@endsection


@push('asset')
<!-- Full Calendar -->
<link rel='stylesheet' href='/plugins/fullcalendar/lib/cupertino/jquery-ui.min.css' />
<link href='/plugins/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<link href='/plugins/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='/plugins/fullcalendar/lib/moment.min.js'></script>

<script src='/plugins/fullcalendar/fullcalendar.min.js'></script>

<script type="text/javascript">
	$(function() {
		$('#calendar').fullCalendar({
	        header: {
	            left: 'prev,next today',
	            center: 'title',
	            right: 'month,agendaWeek,agendaDay,listMonth'
	        },
	        defaultDate: '2017-03-12',
	        navLinks: true, // can click day/week names to navigate views
	        editable: false,
	        eventLimit: true, // allow "more" link when too many events
	        events: '/getEventDataXML',
	        eventClick: function(event, element) {
		        $('#confirmModal #event_title').text(event.title);
		        sd = new Date(event.start);
		        ed = new Date(event.end);
		        $('#event_range').text(sd.toDateString() + "-" + ed.toDateString());
		        $('#event_id').val(event.id);
		        $('#confirmModal').modal();
		    }
	    });

	    $('#event_cancel_btn').on('click', function() {
	    	var id = $('#event_id').val();
	    	$('#calendar').fullCalendar('removeEvents', id);
	    	$('#confirmModal').modal("hide");
	    	$.ajax({
                url: '/cancelEvent',
                type: 'POST',
                data: {
                        _token: "{{ csrf_token()}}",
                        id: id,
                    },
                dataType: "text",
                success: function(data) {
                    if(data == "success") 
                    	alert('You canceled this event. All escrow will be refunded.');
                    
                }
            });
	    });

	    $('#checkinbtn').on('click', function () {
            $('#event_id').val($('#checkinbtn').attr('data-id'));
        });

        $('#event_checkin_btn').on('click', function() {
            var id = $('#event_id').val();
            $('#confirmModal2').modal("hide");
            $.ajax({
                url: '/checkEvent',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token()}}",
                    id: id,
                },
                dataType: "text",
                success: function(data) {
					if(data == "success")
					{
                        window.location.reload();
                    }
                }
            });
        });
	});
</script>
@endpush

<style>

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	    padding: 30px;
	    border-top: 15px solid steelblue;
	    border-left: 1px dashed steelblue;
	    border-right: 1px dashed steelblue;
	    border-bottom: 1px dashed steelblue;
	    border-radius: 10px !important;
	}

	.eventbox {
		max-width: 900px;
		margin: 0 auto;
		margin-top: 40px;
		padding: 30px;
		border: 1px solid #eee;
		box-shadow: 0 0 10px 0px black;
	}

</style>
@section('content')
<div class="container">
	<div class="main-container">
		@if(Session::has('message'))
			<div class="alert alert-{{ Session::get('status') }} status-box">
				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				{{ Session::get('message') }}
			</div>
		@endif
		<div class="row">
			<div class="col-md-12" style="text-align: center">
				<h2><strong>Event Schedule you joined</strong></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id='calendar'></div>
			</div>
		</div>

	</div>
</div>

<div class="container">
	<div class="main-container">

		@if(count($events) > 0)
			@foreach($events as $event)
			<div class="space-top eventbox">
				<div class="row">
					<div class="col-md-2">
						<div style="text-align: center; padding:10px">
							<span style="font-size: 50px; color: #4b4be0; ">MAR</span>
							<br>
							<span style="font-size: 40px">30</span>
						</div>
					</div>
					<div class="col-md-8">
						<h3>{{$event->title}}</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore fugit vitae quia dicta inventore reiciendis. Ipsa, aut voluptas quaerat.{{$event->description}}</p>
						<h5>{{$event->startdate}} - {{$event->expiredate}}</h5>
					</div>
					<div class="col-md-2">
						<a class="btn btn-success" id="checkinbtn" data-toggle="modal" data-target="#confirmModal2" data-id="{{$event->eventid}}" data-id2="{{$event->userid}}" style="position: absolute; right: 0px"><i class="fa fa-check"></i>Check In</a>
					</div>
				</div>
			</div>
			@endforeach
		@else
		    <div class="eventbox">
				<h4>There's no events you joined. Please take more activities on Victus</h4>
			</div>
		@endif

	</div>
</div>

<!--Drop confirmation Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-ticket"></i>&nbsp  Victus Calendar</h4>
			</div>
			<div class="modal-body">
				<h4 id="event_title"></h4>
				<h5> When</h5>
				<input type="hidden" name="event_id" id="event_id" value="">
				<p class="margin-clear" id="event_range"><i class="fa fa-calendar">&nbsp</i></p>
			</div>

			<div class="modal-footer">
				<button class="btn btn-sm btn-default" data-dismiss="modal">OK</button>
				<button class="btn btn-sm btn-success drop-ok" id="event_cancel_btn">Cancel this event</button>
			</div>
		</div>
	</div>
</div>
<!--End Confirmation Modal -->

<!--Drop confirmation Modal 2-->
<div class="modal fade" id="confirmModal2" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-ticket"></i>&nbsp  Victus Network</h4>
			</div>
			<div class="modal-body">
				<h4 id="event_title"></h4>
				<h5> Have you really attended this event? </h5>
				<input type="hidden" name="event_id" id="event_id" value="">
			</div>

			<div class="modal-footer">
				<button class="btn btn-sm btn-default" data-dismiss="modal">No</button>
				<button class="btn btn-sm btn-success drop-ok" id="event_checkin_btn">CheckIn</button>
			</div>
		</div>
	</div>
</div>
<!--End Confirmation Modal 2-->



@endsection