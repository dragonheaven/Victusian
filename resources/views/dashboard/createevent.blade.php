@extends('layouts.dashtemp')

@section('title')
Create Event
@endsection

@section('content')
        <h3 class="page-title"> Create New Event
            <small>Event edit</small>
        </h3>
        
        <link href="/dash_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="/dash_assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

        <link href="/dash_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="/dash_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="/plugins/jquery.min.js"></script>
        <script src="/dash_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="/dash_assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="/dash_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

        <script type="text/javascript">
        $(function () {
            $('#btnUpload').on("click", function() {
                file = $('#image-upload')[0].files[0];
                var formdata = new FormData();
                var reader = new FileReader();
                reader.onloadend = function(e) {
                    $('#btnUpload').val('Wait...');
                    formdata.append("_token", $('meta[name="csrf-token"]').attr("content"));
                    formdata.append("image", file);

                    $.ajax({
                        url: $("#image_upload_url").val(),
                        type: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            if (data == 'fail') {
                                alert("Failed to upload image.");
                                $('#btnUpload').val('Failed Upload!');
                            } else {
                                $('input[name="image"]').val(data);
                                $('#btnUpload').val('Success!');
                                $('#btnUpload').addClass('btn-success');
                            }
                        }
                    });
                };
                reader.readAsDataURL(file);
            });
        });
        </script>

        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal form-row-seperated" method="post" action="{{url('/EventController/create')}}">
                {{ csrf_field() }}
                    <div class="portlet">
                        <div class="portlet-title">
                            
                            <div class="actions btn-set">
                                <button type="button" name="back" class="btn btn-secondary-outline">
                                    <i class="fa fa-angle-left"></i> Back</button>
                                <button class="btn btn-secondary-outline">
                                    <i class="fa fa-reply"></i> Reset</button>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-check"></i> Save</button>
                                <button class="btn btn-default">
                                    <i class="fa fa-check-circle"></i> Save & Continue Edit</button>                                
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable-bordered">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_general" data-toggle="tab"> General information</a>
                                    </li>
                                    <li>
                                        <a href="#tab_images" data-toggle="tab"> Photos </a>
                                    </li>                                    
                                </ul>
                                <div class="tab-content">

                                    <!-- start tab_general-->
                                    <div class="tab-pane active" id="tab_general">
                                        <div class="form-body">
                                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                <label class="col-md-2 control-label">Title:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="title" placeholder=""> </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                                <label class="col-md-2 control-label">Description:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('tagline') ? ' has-error' : '' }}">
                                                <label class="col-md-2 control-label">Event Tagline:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="tagline"></textarea>
                                                    <span class="help-block"> shown in event listing </span>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                                <label class="col-md-2 control-label">Categories:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">  
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
                                                        <li>
                                                            <label>
                                                                <input type="checkbox" name="category[]" value="6">Meditation</label>                                                                    
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
                                                        
                                                    </ul>
                                                    <span class="help-block"> select one or more categories </span>
                                                </div>
                                            </div>

                                           <div class="form-group">
                                                <label class="col-md-2 control-label">Event Type:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="table-group-action-input form-control" name="type">
                                                        <option value="0">One Time</option>
                                                        <option value="1">Daily</option>
                                                        <option value="2">Weekly</option>
                                                        <option value="3">Monthly</option>
                                                    </select>

                                                </div>
                                                <a class="btn popovers" data-container="body" onclick=" " data-trigger="hover" data-placement="right" data-content="One Time event is ... Daily event is ... Monthly event is..." data-original-title="What is this?"><i class="fa fa-question-circle"></i></a>
                                            </div>


                                            <div class="form-group{{ $errors->has('available_from') ? ' has-error' : '' }}">
                                                <label class="col-md-2 control-label">Available Date:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy-mm-dd">
                                                        <input type="text" class="form-control" name="available_from">
                                                        <span class="input-group-addon"> to </span>
                                                        <input type="text" class="form-control" name="available_to"> </div>
                                                    <span class="help-block"> availability daterange. </span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Level Required:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <select class="table-group-action-input form-control input-medium" name="level">
                                                        <option value="0">Beginner</option>
                                                        <option value="1">Medium</option>
                                                        <option value="2">Advanced</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-2">Allow Free Trial</label>
                                                <div class="col-md-10">
                                                    <input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="default" name="trialable" value="1">
                                                </div>    
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Select Location(Cities)</label>
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

                                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                                <label class="col-md-2 control-label">Price:
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="price" placeholder="">                                                     
                                                </div>
                                                <label class="control-label"> $ </label>
                                            </div>                                           
                                            
                                        </div>
                                    </div>
                                    <!-- end Tab-main-->

                                    <!-- start tab_images-->
                                    <div class="tab-pane" id="tab_images">
                                        <div class="alert alert-success margin-bottom-10">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <i class="fa fa-warning fa-lg"></i> Please choose a valid image format. </div>
                                        
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 300px; height: 225px;">
                                                    <img src="http://www.placehold.it/300x225/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
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
                                    <!-- end tab_images-->

                                </div>
                                <!-- end tab-content-->                                
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection                