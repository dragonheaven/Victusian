@extends('layouts.profile')

@section('title')
My Profile
@endsection

@push('css')
<link href="/dash_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<link href="/dash_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')

    <div class="main-container">        
        <div class="container">
            <div class="row">
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="{{url('/')}}">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Edit Profile</span>
                        </li>
                    </ul>
                    <!-- <div class="page-toolbar">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#">
                                        <i class="icon-bell"></i> Action</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-shield"></i> Another action</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i> Something else here</a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bag"></i> Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                
                
                <div class="portlet box">
                    <div class="portlet-title">
                        <div class="caption">
                            <h2 class="caption bold font-yellow-casablanca uppercase"><i class="fa fa-file-text-o"></i> &nbsp Edit your profile</h2>
                        </div>     

                    </div>
                    <div class="portlet-body">                        
                        <form class="form" method="post" action="{{url('/profile/createStudentProfile')}}">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 250px; height: 250px; border: 1px solid #00af8e;">
                                            @if(file_exists(session('userImageURL')))
                                                <img src="/{{ session('userImageURL') }}" alt="" style="width:100%" />
                                            @else
                                                <img src="http://www.placehold.it/250x250/EFEFEF/AAAAAA&amp;text=Add+Photo">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 250px;"> </div>
                                        <div>
                                            <span class="btn default btn-file{{ $errors->has('image_upload') ? ' has-error' : '' }}">
                                                <span class="fileinput-new"> Select New image </span>
                                                <span class="fileinput-exists"> Change </span>
                                                <input type="file" name="image_upload" id="image-upload">
                                            </span>
                                            
                                            <input type="button" class="btn btn-primary" id="btnUpload" value="Upload" style="float:right">
                                            <input type="hidden" id="image_upload_url" value="{{ url('/image-upload') }}">
                                            <input type="hidden" id="image_upload" name="image" value="none" required>
                                        </div>
                                                                                
                                    </div>

                                    <!-- Extra badges would be here-->

                                </div>
                                <div class="col-sm-9">
                                    <h1 class="caption bold uppercase">{{session('username')}}</h1>
                                    
                                    <div class="row">                                    
                                        <div class="col-sm-4">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info has-feedback{{ $errors->has('firstName') ? ' has-error' : '' }}">
                                                <input type="text" class="form-control input-md" id="form_control_1" value="{{old('firstName')}}"  name="firstName">
                                                <label for="form_control_1">First Name</label>
                                            </div>
                                            @if ($errors->has('firstName'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('firstName') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info has-feedback{{ $errors->has('lastName') ? ' has-error' : '' }}">
                                                <input type="text" class="form-control input-md" id="form_control_1" value="{{old('lastName')}}"  name="lastName">
                                                <label for="form_control_1">Last Name</label>
                                            </div>
                                            @if ($errors->has('lastName'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastName') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="md-radio-inline">                                    
                                            <div class="md-radio has-error">
                                                <input type="radio" id="radio15" name="gender" value="1" class="md-radiobtn" checked="">
                                                <label for="radio15">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Male </label>
                                            </div>
                                            <div class="md-radio has-warning">
                                                <input type="radio" id="radio16" name="gender" value="0" class="md-radiobtn">
                                                <label for="radio16">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Female </label>
                                            </div>
                                        </div>
                                    </div> <!-- End Gender Radio -->

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info"> 
                                                <input class="form-control form-control-inline input-md date-picker" id="dob" data-date-format="yyyy-mm-dd" size="16" type="text" name="dob" value="1979-02-13">
                                                <label for="dob">Date of Birth</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control" id="form_control_1" name="hobby">
                                                    <option value=""></option>
                                                    <option value="1">Coaching</option>
                                                    <option value="2">New Economy</option>
                                                    <option value="3">Yoga</option>
                                                    <option value="4">Cooking</option>
                                                    <option value="5">Creative Activities</option>
                                                    <option value="6">Music</option>
                                                    <option value="7">Film</option>
                                                    <option value="8">Dance</option>
                                                    <option value="9">Fitness</option>
                                                </select>   
                                                <label for="form_control_1">Interests</label>                                 
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control" id="form_control_1" name="idliketo">
                                                    <option value=""></option>
                                                    <option value="1">Become holistically fit</option>
                                                    <option value="2">Meet new people</option>
                                                    <option value="3">Just try and see</option>
                                                    <option value="4">Get my friends to join me for new activities</option>
                                                    
                                                </select>   
                                                <label for="form_control_1">I would like to </label>                                 
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="3" name="motto"></textarea>
                                                <label for="form_control_1">Life motto</label>
                                            </div> 
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="8" name="aboutme"></textarea>
                                                <label for="form_control_1">About me...</label>
                                            </div> 
                                        </div>
                                    </div>                         

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Submit</button>
                                    <a href="/" type="button" class="btn btn-default">Remind me later</a>
                                </div> 

                            </div>
                        </form>

                    </div>
                </div>
            </div>
               
        </div>
    </div>

@endsection

@push('script')
<script src="/dash_assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/dash_assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
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
@endpush