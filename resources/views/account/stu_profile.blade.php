@extends('layouts.dashtemp')

@section('title')
Dashboard
@endsection

@section('content')
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN TODO SIDEBAR -->
                            <div class="todo-ui">
                                <div class="todo-sidebar">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
                                                <span class="caption-subject font-green-sharp bold uppercase">Venue </span>
                                                <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view project list</span>
                                            </div>                                            
                                        </div>
                                        <div class="portlet-body todo-project-list-content">
                                            <div class="todo-project-list">
                                                <ul class="nav nav-stacked">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-info"> 6 </span> AirAsia Ads </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-success"> 2 </span> HSBC Promo </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="javascript:;">
                                                            <span class="badge badge-success"> 3 </span> GlobalEx</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-default"> 14 </span> Empire City </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-info"> 6 </span> AirAsia Ads </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <span class="badge badge-danger"> 2 </span> Loop Inc Promo </a>
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
                                                <i class="icon-bar-chart font-green-sharp hide"></i>                                               
                                                <span class="caption-subject font-green-sharp bold uppercase">Upcoming Events</span>
                                            </div>                                            
                                        </div>
                                        <!-- end PROJECT HEAD -->
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="todo-tasklist">

                                                        @if(count($events) > 0)
                                                            @foreach($events as $event)
                                                                <div class="todo-tasklist-item todo-tasklist-item-border-blue">                                                                                                                                
                                                                    @if(file_exists($event->image_url))
                                                                    <img class="todo-userpic pull-left" src="/{{$event->image_url}}" width="27px" height="27px">
                                                                    @else
                                                                    <img class="todo-userpic pull-left" src="/images/avatar.png" width="27px" height="27px">
                                                                    @endif
                                                                    <div class="todo-tasklist-item-title"> {{$event->title}} </div>
                                                                    <div class="todo-tasklist-item-blue"> by &nbsp {{$event->displayName}} </div>
                                                                    <div class="todo-tasklist-item-text"> {{$event->description}} </div>
                                                                    <div class="todo-tasklist-controls pull-left">
                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-calendar"></i> {{$event->startdate}} - {{$event->expiredate}}</span>

                                                                        <span class="todo-tasklist-date">
                                                                            <i class="fa fa-map-marker"></i> {{$event->venue}}</span>
                                                                        @if($event->visited)
                                                                        <span class="todo-tasklist-badge badge badge-roundless">{{$event->visited}} &nbsp Joined</span>
                                                                        @endif
                                                                    </div>                                                                    
                                                                </div>
                                                            @endforeach
                                                        @else
                                                        <p>No Events reserved. Please create new.</p>
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