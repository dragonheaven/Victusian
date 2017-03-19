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

</style>
@section('content')
<div class="container">
	<div class="main-container">
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
@endsection