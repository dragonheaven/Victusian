@extends('layouts.main')
@section('title')
Create Event
@endsection

@section('content')
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="/dash_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

<script src="/dash_assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>


<script src="/dash_assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>





<section class="main-container">
	<div class="container">
		<div class="row" style="background: rgba(188, 219, 241, 0.58);padding: 40px;">
			<div class="main com-md-12">
				<br>
				<h2 class="title"><strong>Create New Event</strong></h2>
				<form class="form-horizontal form-row-seperated" method="post" action="{{url('/event/create')}}">
		        {{ csrf_field() }}
		        	<div class="portlet box blue">		        		
		        		<div class="portlet-title">		  
		        			
                            <div class="actions btn-set">                                
                                <button class="btn btn-secondary-outline" onclick="refresh();">
                                    <i class="fa fa-reply"></i> Reset</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check"></i> Save</button>
                                <button class="btn btn-primary">
                                    <i class="fa fa-check-circle"></i> Save & Continue Edit</button>                                
                            </div>
                        </div>
                        <div class="portlet-body">

                        	<div class="tabbable-line">
								<!-- tabs start -->
								<!-- ================ -->
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#h3tab1" role="tab" data-toggle="tab"><i class="fa fa-info-circle pr-10"></i>General Information</a></li>
									<li><a href="#h3tab2" role="tab" data-toggle="tab"><i class="fa fa-photo pr-10"></i>Upload Photo</a></li>					
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane in active" id="h3tab1">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
	                                                <label class="col-md-3 control-label">Title:
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-9">
	                                                    <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title of your event"> 
	                                                    @if ($errors->has('title'))
							                                <span class="help-block">
							                                    <strong>{{ $errors->first('title') }}</strong>
							                                </span>
							                            @endif
	                                                </div>
	                                            </div>
	                                            
	                                            <div class="form-group has-feedback{{ $errors->has('tagline') ? ' has-error' : '' }}">
	                                                <label class="col-md-3 control-label">Event Tagline:
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-9">
	                                                    <textarea class="form-control" name="tagline" value="{{old('tagline')}}" placeholder="Your slogan goes here.."></textarea>
	                                                    @if ($errors->has('tagline'))
							                                <span class="help-block">
							                                    <strong>{{ $errors->first('tagline') }}</strong>
							                                </span>
							                            @endif
	                                                </div>
	                                            </div>
	                                           	
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Event Type:
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-4">
	                                                    <select class="table-group-action-input form-control" name="type" id="type">
															<option value=""> </option>
	                                                        <option value="0">One Time</option>
	                                                        <option value="1">Daily</option>
	                                                        <option value="2">Weekly</option>
	                                                        <option value="3">Monthly</option>
	                                                    </select>

	                                                </div>
	                                                
	                                            </div>	                                            

	                                            <div class="form-group{{ $errors->has('available_from') ? ' has-error' : '' }}">
	                                                <label class="col-md-3 control-label">Date:</label>
	                                                <div class="col-md-9">
	                                                    <div class="input-group input-large date-picker input-daterange" data-date-format="yyyy-mm-dd">
	                                                        <input type="text" class="form-control" name="available_from" id='datetimepicker2'>
	                                                        <span class="input-group-addon" name="date-to"> to </span>
	                                                        <input type="text" class="form-control" name="available_to" id='datetimepicker3'> 
	                                                    </div>
	                                                </div>
	                                            </div>

	                                            <div class="form-group">
	                                            	<label class="col-md-3 control-label">Time</label>
	                                            	<div class="col-md-7">
	                                            		<div class="input-group input-large date">
	                                            			<input type="text" class="form-control" name="start-time" id="datetimepicker5">
	                                            			<span class="input-group-addon" name="time-to"> to </span>
	                                            			<input type="text" class="form-control" name="end-time" id="datetimepicker6">
	                                            		</div>
	                                            	</div>
	                                            	<script type="text/javascript">
											            $(function () {
											                $('#datetimepicker5').datetimepicker({
											                    format: 'LT'
											                });
											                $('#datetimepicker6').datetimepicker({
											                    format: 'LT'
											                });
											            });
											        </script>
	                                            </div>

												<style>
													.weekday {
														padding: 5px 10px;
														border: 1px solid #00A8FF;
													}

													#bringalong {
														display: none;
													}

												</style>

												<div class="form-group form-md-line-input" id="monthweek-check-group">
													<label class="col-md-3 control-label" for="form_control_1">Week of Month</label>
													<div class="col-md-9">
														<div class="md-checkbox-inline">
															<table>
																<thead>
																<td class="weekday">
																	<input type="checkbox" name="monthweek[]" value="0">Week1</label>
																</td>
																<td class="weekday">
																	<input type="checkbox" name="monthweek[]" value="1">Week2</label>
																</td>
																<td class="weekday">
																	<input type="checkbox" name="monthweek[]" value="2">Week3</label>
																</td>
																<td class="weekday">
																	<input type="checkbox" name="monthweek[]" value="3">Week4</label>
																</td>
																<td class="weekday">
																	<input type="checkbox" name="monthweek[]" value="4">Week5</label>
																</td>
																</thead>
															</table>
														</div>
													</div>
												</div>

												<div class="form-group form-md-line-input" id="weekday-check-group">
													<label class="col-md-3 control-label" for="form_control_1">Weekdays</label>
													<div class="col-md-9">
														<div class="md-checkbox-inline">
															<table>
																<thead>
																	<td class="weekday">
																		<input type="checkbox" name="weekday[]" value="0">Sun</label>
																	</td>
																	<td class="weekday">
																		<input type="checkbox" name="weekday[]" value="1">Mon</label>
																	</td>
																	<td class="weekday">
																		<input type="checkbox" name="weekday[]" value="2">Tue</label>
																	</td>
																	<td class="weekday">
																		<input type="checkbox" name="weekday[]" value="3">Wed</label>
																	</td>
																	<td class="weekday">
																		<input type="checkbox" name="weekday[]" value="4">Thu</label>
																	</td>
																	<td class="weekday">
																		<input type="checkbox" name="weekday[]" value="5">Fri</label>
																	</td>
																	<td class="weekday">
																		<input type="checkbox" name="weekday[]" value="6">Sat</label>
																	</td>
																</thead>
															</table>
														</div>
													</div>
												</div>
	                                            
	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Event Level:</label>
	                                                <div class="col-md-9">
	                                                    <select class="table-group-action-input form-control input-medium" name="level">
	                                                        <option value="0">Beginner</option>
	                                                        <option value="1">Medium</option>
	                                                        <option value="2">Advanced</option>
	                                                    </select>
	                                                </div>
	                                            </div>

	                                            <div class="form-group">
	                                                <label class="control-label col-md-3">Allow Free Trial</label>
	                                                <div class="col-md-9">
	                                                    <input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="default" name="trialable" value="1">
	                                                </div>    
	                                            </div>

	                                            <div class="form-group">
	                                                <label class="col-md-3 control-label">Select Location(Cities)</label>
	                                                <div class="col-md-4">
	                                                    <select id="single" class="form-control select2" name="venue">
	                                                        <option value="Vienna">Vienna</option>
	                                                        <option value="Graz">Graz</option>
	                                                        <option value="Linz">Linz</option>
	                                                        <option value="Salzburg">Salzburg</option>
	                                                        <option value="Innsbruck">Innsbruck</option>                                                      
	                                                    </select>                                                    
	                                                </div>
	                                            </div>

	                                            <div class="form-group has-feedback{{ $errors->has('price') ? ' has-error' : '' }}">
	                                                <label class="col-md-3 control-label">Price:
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-6">
	                                                    <input type="text" class="form-control" name="price" value="{{old('price')}}"> 
	                                                    @if ($errors->has('price'))
							                                <span class="help-block">
							                                    <strong>{{ $errors->first('price') }}</strong>
							                                </span>
							                            @endif                                                     
	                                                </div>
	                                                <label class="control-label"> <strong>€</strong> </label>	                                                	
	                                            </div>
	                                                                          
											</div>
											<div class="col-md-6 category">
												<div class="form-group has-feedback{{ $errors->has('category') ? ' has-error' : '' }}">
	                                                <label class="col-md-3 control-label">Categories:
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-5">  
	                                                    <ul class="list-unstyled">
	                                                        <li>
	                                                            <label>

	                                                                <input type="checkbox" name="category[]" value="1">Coaching</label>                                                                    
	                                                        </li>
	                                                        <li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="2">Creative Activities</label>                                                                    
	                                                        </li>
	                                                        <li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="3">Cooking</label>                                                                    
	                                                        </li>
	                                                        <li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="4">Yoga</label>                                                                    
	                                                        </li>
	                                                        <li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="5">Film</label>                                                                    
	                                                        </li>

	                                                    </ul>
	                                                </div>
	                                                <div class="col-md-4">
	                                                	<ul class="list-unstyled">
	                                                		<li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="6">New Economy</label>                                                                    
	                                                        </li>
	                                                        <li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="7">Dancing</label>                                                                    
	                                                        </li>
	                                                        <li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="8">Music</label>                                                                    
	                                                        </li>
	                                                        <li>
	                                                            <label>
	                                                                <input type="checkbox" name="category[]" value="9">Fitness</label>                                                                    
	                                                        </li>
															@if(session('userrole') == 2)
																<li>
																	<label>
																		<input type="checkbox" name="category[]" id="trip-checkbox" value="10">Trip</label>
																</li>
																<li>
																	<label>
																		<input type="checkbox" name="category[]" id="travel-checkbox" value="11">Travel</label>
																</li>
															@endif
	                                                	</ul>
	                                                </div>
	                                            </div>

												<div class="form-group has-feedback" id="bringalong">
													<label class="col-md-3 control-label">What do I need to bring along :
														<span class="required"> * </span>
													</label>
													<div class="col-md-9">
														<textarea class="form-control" name="bringalong" rows="3" value="{{old('bringalong')}}"></textarea>
													</div>
												</div>

	                                            <div class="form-group has-feedback{{ $errors->has('description') ? ' has-error' : '' }}">
	                                                <label class="col-md-3 control-label">Description:
	                                                    <span class="required"> * </span>
	                                                </label>
	                                                <div class="col-md-9">
	                                                    <textarea class="form-control" name="description" rows="8" value="{{old('description')}}"></textarea>
	                                                </div>
	                                            </div>
											</div>
										</div>
										
									</div>
									<div class="tab-pane" id="h3tab2">
										<div class="row">
											<div class="alert alert-info margin-bottom-10" style="margin: auto 20px">
	                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
	                                            <i class="fa fa-warning fa-lg"></i> Please choose a valid image format. 
	                                        </div>
	                                        
                                            <div class="fileinput fileinput-new" data-provides="fileinput" style="margin-left:20px">
                                                <div class="fileinput-new thumbnail" style="width: 300px; height: 225px;">
                                                    <img src="http://www.placehold.it/300x225/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> 
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 225px;"> </div>
                                                <div>
                                                    <span class="btn default btn-file{{ $errors->has('image_upload') ? ' has-error' : '' }}">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="image_upload" id="image-upload">
                                                    </span>
                                                    
                                                    <input type="button" class="btn btn-default" id="btnUpload" value="Upload">
                                                    <input type="hidden" id="token" name="token" value="{{ Session::token() }}">
                                                    <input type="hidden" id="image_upload_url" value="{{ url('/image-upload') }}">
                                                    <input type="hidden" id="image_upload" name="image" required>
                                                </div>
	                                           
	                                            <!-- <div class="clearfix margin-top-10">
	                                                <span class="label label-danger"> NOTE! </span>
	                                                <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
	                                            </div> -->
	                                        </div>
										</div>
										
									</div>					
								</div>
								<!-- tabs end -->
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script src="/js/event/createEvent.js" type="text/javascript"></script>
@endsection