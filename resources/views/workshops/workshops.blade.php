@extends('layouts.main')

@section('title')
Workshops
@endsection

@section('content')
<div class="banner pv-40 ding-bottom-clear parallax dark-translucent-bg" style="background-image:url('/images/workshop.jpg');">				
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center col-md-offset-2 pv-20">
				<h1 class="title">Change yourself <strong>to change the world</strong></h1>
				<div class="separator mt-10">					
				</div>
				<h3 class="text-center">
					{{$category}}
				</h3>
			</div>
		</div>
	</div>			
</div>

<!-- events panel start-->

<section class="section light-bg clear-fx">
	<div class="container">
		<a href="{{ url('/') }}">< Back home</a>
		<div class="row">
	    	<!-- sidebar start-->
	    	<div class="col-sm-3">
	    		<div class="sidebar">
    				<div class="panel-group collapse-style-2" id="accordion-2">

    					<!-- Panel1 start-->
    					<div class="panel panel-default">
    						<div class="panel-heading">
    							<h4 class="panel-title">
    								<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="false">
										<i class="fa fa-location-arrow pr-10"></i>Locations
									</a>
    							</h4>
    						</div>
    						<div id="collapseOne-2" class="panel-collapse collapse in" aria-expanded="false">
								<div class="panel-body">
									<ul class="list-group list-categorytree" style="overflow: auto;">

										@if (count($venues) > 0)
										@foreach ($venues as $venue)
								        <li class="list-group-item ">
								            <a href="{!! route('filterLocation', ['nCate'=>$events->nCategory, 'nLoc'=>$venue->venue]) !!}" rel="nofollow">
								                {{$venue->venue}}
								                <span class="badge pull-right"> {{$venue->count}} </span>
								                </a>
								        </li>
								        @endforeach
								        @endif

							        </ul>
								</div>
							</div>
    					</div>

    					<!-- Panel 2 start-->
    					<div class="panel panel-default">
    						<div class="panel-heading">
    							<h4 class="panel-title">
    								<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseOne-3" aria-expanded="false" class="collapsed">
										<i class="fa fa-calendar pr-10"></i>Date
									</a>
    							</h4>
    						</div>
    						<div id="collapseOne-3" class="panel-collapse collapse" aria-expanded="false">
								<div class="panel-body">
									<ul class="list-group list-categorytree">								        
								        <li class="list-group-item ">
								            <a href="/">Today</a>
								        </li>
								        <li class="list-group-item ">
								            <a href="/">This week</a>
								        </li>								        
								        <li class="list-group-item ">
								            <a href="/">This month</a>
								        </li>								       
								    </ul>
								</div>
							</div>
    					</div>

    					<!-- Panel3 start-->
    					<div class="panel panel-default">
    						<div class="panel-heading">
    							<h4 class="panel-title">
    								<a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-4" aria-expanded="false" class="collapsed">
										<i class="fa fa-user pr-10"></i>Masters
									</a>
    							</h4>
    						</div>
    						<div id="collapseOne-4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									<ul class="list-group list-categorytree" style="overflow: auto;">
										@if (count($masters) > 0)
										@foreach ($masters as $master)
								        <li class="list-group-item ">
								            <a href="{!! route('filterMaster', ['nCate'=>$events->nCategory, 'nId'=>$master->id]) !!}">
								                {{$master->name}}
								                <span class="badge pull-right"> {{$master->count}} </span>
								                </a>
								        </li>
								    	@endforeach
								    	@endif
								        				    
								        
							        </ul>
								</div>
							</div>
    					</div>
    					
    				</div>
	    		</div>
	    	</div>

	    	<!-- event content start-->
	    	<div class="main col-sm-9">
							

				@if(count($events) > 0)
				@foreach($events as $event)
				<div class="listing-item mb-20 light-gray-bg">
					<div class="row grid-space-0">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="overlay-container">
								@if(file_exists($event->img_url))
								<img src="/{{$event->img_url}}" alt="">
								@else
								<img src="/images/event1.jpg" alt="">
								@endif
								<a class="overlay-link" href="{!! route('eventdetail', ['num' => $event->id]) !!}"><i class="fa fa-plus"></i></a>
								<!-- <span class="badge">TopRated</span> -->
							</div>
							<p class="pl-10">								
								@for($i = 0;$i < $event->rate;$i ++)
								<i class="fa fa-star text-default"></i>
								@endfor
								@for($i = 0;$i < (7-$event->rate);$i ++)
								<i class="fa fa-star-o"></i>
								@endfor								
							</p>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="body">
								<h3 class="margin-clear"><a href="{!! route('eventdetail', ['num'=>$event->id]) !!}"><strong>{{$event->title}}</strong> &nbsp by &nbsp {{$event->name}}</a></h3>
								<h5>{{$event->tagline}}</h5>								
								<div class="separator-2 mt-10"></div>
								<p>{{$event->description}}</p>
								<div class="elements-list clearfix">
									<span class="price">€{{$event->price}}</span>
									<a href="{!! route('eventdetail', ['num'=>$event->id]) !!}" class="pull-right btn btn-sm btn-default-transparent btn-animated">More<i class="fa fa-angle-double-right"></i></a>
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
					<h5>No events reserved for this category.</h5>
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
	    </div>
	</div>
</section>   

@endsection