@extends('layouts.profile')

@section('title')
My Profile
@endsection

@push('css')
<link href="/dash_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<link href="/dash_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />

<link href="/dash_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/dash_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/css/profile/master.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')

    <div class="main-container">        
        <div class="container">           
               
            <div class="row">                
                <div class="col-md-12">
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
                        <div class="page-toolbar">
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
                        </div>
                    </div>
                    <div class="m-heading-1 border-yellow m-bordered" id="header-statement">
                        <h3>Legions are gurus and masters of the art they teach</h3>
                        <p> Victusian legions start as an apprentice of their chosen legion member in their area. There is no additional charge for set up coaching and guiding as per welcome package. Once a Master's room flourishes with Victusians, they will be undergoing the master academy with their respective legion member once a month. This entices listening and guiding our Masters in the right direction via professional coaching. Moreover, it subtly carries along the 'Victusophy'. </p>                        
                    </div>
                    <div class="portlet light " id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red bold uppercase"> Edit your Profile -
                                    <span class="step-title"> Step 1 of 3 </span>
                                </span>
                            </div>                            
                        </div>
                        <div class="portlet-body form">
                            <form action="{{url('/profile/createLegionProfile')}}" class="form-horizontal" id="submit_form" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> 1 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Personal Information </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Upload Photos </span>
                                                </a>
                                            </li> 
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> 3 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Review </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success"> </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button> You have validation errors! 
                                            </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! 
                                            </div>
                                            <div class="tab-pane active" id="tab1">
                                                <h3 class="block">Provide your account details</h3>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">First Name
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="firstname" />
                                                                <span class="help-block"> Please provide first name </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Last Name
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="lastname" />
                                                                <span class="help-block"> Provide your last name </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Gender
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <div class="radio-list">
                                                                    <label>
                                                                        <input type="radio" name="gender" value="1" data-title="Male" checked="true" /> Male </label>
                                                                    <label>
                                                                        <input type="radio" name="gender" value="0" data-title="Female" /> Female </label>
                                                                </div>
                                                                <div id="form_gender_error"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Date of birth
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input class="form-control form-control-inline input-md date-picker" id="dob" data-date-format="yyyy-mm-dd" size="16" type="text" name="dob" value="1979-02-13">                                                                    
                                                                <span class="help-block"> Provide your date of birth </span>
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Phone Number
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="phonenum" />
                                                                <span class="help-block"> Provide your phone number </span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Address
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="address" />
                                                                <span class="help-block"> Provide your street address </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">City/Town
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="city" />
                                                                <span class="help-block"> Provide your city or town </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Country
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <select name="country" id="country_list" class="form-control">
                                                                    <option value=""></option>                                                                    
                                                                    <option value="Austria">Austria</option>                                                                    
                                                                    <option value="India">India</option>
                                                                    <option value="Italy">Italy</option>
                                                                    <option value="UnitedStates">UnitedStates</option>
                                                                </select>
                                                                <span class="help-block"> Provide your country </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Postal(Zip) Code
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="postalcode" />
                                                                <span class="help-block"> Provide your postal code </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Categories
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">  
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
                                                                </ul>
                                                            </div>  
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Currency
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <select name="currency" id="currency_list" class="form-control">
                                                                    <option value="1">Euro - €</option>
                                                                    <option value="2">Dollar - $</option>     
                                                                </select>
                                                                <span class="help-block"> Choose currency of you </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Teaching since
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <input class="form-control form-control-inline input-md date-picker" id="teachsince" data-date-format="yyyy-mm-dd" size="16" type="text" name="teachsince" value="1979-02-13">                                                                    
                                                                <span class="help-block"> Teaching since... </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Life motto
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-6">
                                                                <textarea class="form-control" rows="2" name="motto"></textarea>
                                                                <span class="help-block"> Provide your Motto </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Introduce yourself</label>
                                                            <div class="col-md-6">
                                                                <textarea class="form-control" rows="5" name="aboutme"></textarea>
                                                                <span class="help-block"> Provide describe yourself </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab2">
                                                <h3 class="block">Change your avatar</h3>
                                                <div class="row">
                                                    <div class="col-sm-2" style="text-align:center;">
                                                        <div class="fileUpload btn btn-primary">
                                                            <span><i class="fa fa-plus"></i>Choose New</span>
                                                            <input type="file" name="file_avatar" id="file_avatar" class="upload" />
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2" id="avatardiv">
                                                        @if(file_exists(session('userImageURL')))
                                                            <img src="/{{ session('userImageURL') }}" class="img-avatar-preview" />
                                                        @else
                                                            <img src="http://www.placehold.it/250x250/EFEFEF/AAAAAA&amp;text=Add+Photo"  class="img-avatar-preview" >
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <h3 class="block">Your teaching Images</h3>
                                                <div class="row">
                                                    <div class="col-sm-2" style="text-align:center; vertical-align: middle">
                                                        <a id="add_more" class="btn btn-primary"><i class="fa fa-plus"></i>Add more photo</a>
                                                    </div>
                                                    
                                                    <div id="filediv" class="col-sm-2 filediv" style="margin-left: 0px">                                                
                                                        <img class="img-preview" src="http://www.placehold.it/150x150/EFEFEF/AAAAAA&amp;text=Click+Me">
                                                        <input name="file[]" type="file" id="file"/>
                                                    </div>                                                                              
                                                </div>
                                            </div>
                                            
                                            <div class="tab-pane" id="tab4">
                                                <h3 class="block">Review your profile information</h3>
                                                <h4 class="form-section">Personal Information</h4>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">First Name:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="firstname"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Last Name:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="lastname"> </p>
                                                    </div>
                                                </div>

                                                <h4 class="form-section">Detailed information</h4>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Date of birth:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="dob"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Gender:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="gender"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Phone:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="phonenum"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Address:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="address"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">City/Town:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="city"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Country:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="country"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Postal Code:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="postalcode"> </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Aboutme:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="aboutme"> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Back </a>
                                                <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <button type="submit" class="btn green button-submit"> Submit
                                                    <i class="fa fa-check"></i>
                                                </button>
                                            </div>
                                        </div>
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

@push('script')
<script src="/dash_assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="/dash_assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

<script src="/dash_assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/dash_assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/js/profile/master.js" type="text/javascript"></script>
@endpush