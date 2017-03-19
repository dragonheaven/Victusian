@extends('layouts.main')

@section('title')
Oversee
@endsection

@section('content')
<div class="page-wrapper">
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="vertical">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="active"><a href="#vtab1" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-magic pr-10"></i> My masters</a></li>
						<li class=""><a href="#vtab2" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-life-saver pr-10"></i> Event Management</a></li>
						<li class=""><a href="#vtab3" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-map-marker pr-10"></i> Venue Management</a></li>
						
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade active in" id="vtab1">
							<h3 class="title">My masters</h3>
							<div class="separator-2"></div>
							@if(count($masters))
								@foreach($masters as $master)
									<div class="row" style="margin: 10px">
										<div class="col-sm-2">
											<img src="/{{$master->image_url}}" style="border: 1px solid transparent; border-radius: 50% !important">
										</div>
										<div class="col-sm-10">
											<h4>{{$master->name}}</h4>
										</div>
									</div>
								@endforeach
							@endif
						</div>
						<div class="tab-pane fade" id="vtab2">
							<h3 class="title">Newly created events by my masters</h3>
							@if(count($events))
								@foreach($events as $event)
									<div class="separator-2"></div>
									<div class="row" style="margin: 10px">
										<div class="col-sm-2">
											<img src="/{{$event->img_url}}" style="margin: 10px">
										</div>
										<div class="col-sm-7">
											<a href="{!! route('eventdetail', ['num' => $event->id]) !!}"><h4><strong>{{$event->title}}</strong> &nbsp; by {{$event->name}}</h4></a>
											<p>{{$event->tagline}}</p>
											<span>Created: {{$event->createdate}}</span>
										</div>
										<div class="col-sm-3">
											<a href="{!! route('approve', ['num' => $event->id, 'nmode' => '1']) !!}" class="btn btn-primary btn-sm">Approve</a>
											<a href="{!! route('approve', ['num' => $event->id, 'nmode' => '0']) !!}" class="btn btn-default btn-sm">Deny</a>
										</div>
									</div>									
								@endforeach
							@endif
						</div>
						<div class="tab-pane fade" id="vtab3">
							<h3 class="title">Add new venue</h3>
							<div class="separator-2"></div>
								<form action="{{url('/addVenue')}}" method="post" class="form-horizontal row">
								{{ csrf_field() }}
									<div class="col-sm-6">
										<div class="form-group">
		                                    <label class="col-md-4 control-label">Name:
		                                        <span class="required"> * </span>
		                                    </label>
		                                    <div class="col-md-8">
		                                        <input type="text" class="form-control" name="name"> 
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <label class="col-md-4 control-label">Address:
		                                        <span class="required"> * </span>
		                                    </label>
		                                    <div class="col-md-8">
		                                        <input type="text" class="form-control" name="address"> 
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <label class="col-md-4 control-label">City:
		                                        <span class="required"> * </span>
		                                    </label>
		                                    <div class="col-md-8">
		                                        <input type="text" class="form-control" name="city"> 
		                                    </div>
		                                </div>
		                                <div class="form-group">
                                            <label class="col-md-4 control-label">Country:
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-8">
                                                <select class="table-group-action-input form-control" name="country">
                                                    <option value="Austria">Austria</option>
                                                    <option value="India">India</option>
                                                    <option value="Italia">Italia</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                </select>
                                            </div>
                                        </div>
									</div>
									<div class="col-sm-6">
										
		                                <div class="form-group">
		                                    <label class="col-md-4 control-label">Post Code:
		                                        <span class="required"> * </span>
		                                    </label>
		                                    <div class="col-md-8">
		                                        <input type="text" class="form-control" name="postalcode"> 
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <label class="col-md-4 control-label">Phone:
		                                        <span class="required"> * </span>
		                                    </label>
		                                    <div class="col-md-8">
		                                        <input type="text" class="form-control" name="phonenum"> 
		                                    </div>
		                                </div>
		                                <a type="submit" class="btn btn-default btn-outline btn-animated" style="float:right">Register<i class="fa fa-check"></i></a>
									</div>
								
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
