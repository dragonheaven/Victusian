@extends('layouts.dashtemp')

@section('title')
MyEvent
@endsection

@section('content')
                    @if(session('status') == 'success')
                    <script type="text/javascript">
                        alert('New event successfully created!');
                    </script>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN TODO SIDEBAR -->
                            <h2 class="caption-subject font-blue-sharp bold uppercase">My Events</h2>

                            <div class="todo-ui">
                                <div class="todo-sidebar">                                    
                                    <div class="portlet light ">
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
                                <!-- END TODO SIDEBAR -->
                                <!-- BEGIN TODO CONTENT -->
                                <div class="todo-content">
                                    <div class="portlet light ">
                                        <!-- PROJECT HEAD -->
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-bar-chart font-blue-sharp hide"></i>                                               
                                                <span class="caption-subject font-blue-sharp bold uppercase">All Events</span>
                                                
                                            </div>
                                            <a class="btn btn-primary btn-outline sbold" href="{{url('/dashboard/createevent')}}" style="float:right">Create New Event</a>                                            
                                        </div>
                                        <!-- end PROJECT HEAD -->
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="todo-tasklist">                                                       
                                                        
                                                        @if(count($events) > 0)
                                                            @foreach($events as $event)
                                                                @if($event->state == 0)
                                                                <div class="todo-tasklist-item todo-tasklist-item-border-blue" id="{{$event->id}}">
                                                                @elseif($event->state == 1)
                                                                <div class="todo-tasklist-item todo-tasklist-item-border-green" id="{{$event->id}}">
                                                                @elseif($event->state == 2)
                                                                <div class="todo-tasklist-item todo-tasklist-item-border-yellow" id="{{$event->id}}">
                                                                @else
                                                                <div class="todo-tasklist-item todo-tasklist-item-border-red" id="{{$event->id}}">
                                                                @endif
                                                                    <div class="todo-tasklist-item-title"> {{$event->title}} </div>
                                                                    <div class="todo-tasklist-item-text"> {{$event->description}} </div>
                                                                    <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> {{$event->startdate}} - {{$event->expiredate}}</span>
                                                                        @if($event->visited)
                                                                        <span class="todo-tasklist-badge badge badge-roundless">{{$event->visited}} &nbsp Joined</span>
                                                                        @endif
                                                                    </div>
                                                                    @if($event->state == 0)
                                                                    <a href="javascript:delete_event({{$event->id}},2)" class="btn blue btn-outline sbold" style="float:right">Close Event</a>
                                                                    <a href="javascript:delete_event({{$event->id}},1)" class="btn blue btn-outline sbold" style="float:right">Complete Event</a>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        @else
                                                        <p>No Events for you. Please create new.</p>
                                                        <a class="btn blue btn-outline sbold" href="{{url('/dashboard/createevent')}}">Create New Event</a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="todo-tasklist-devider"> </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TODO CONTENT -->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT-->
                    </div>

@endsection                
<script type="text/javascript">
    function delete_event(id, mode){
        $.ajax({
              type: 'POST',
              url: "{{ url('/') }}/dropEvent",
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