
<div class="content">
<!-- BEGIN REGISTRATION FORM -->

<form class="register-form" action="{{ url('/auth/register') }}" method="post">
{{ csrf_field() }}
    <h3>Sign Up</h3>
    <div class="row">
        <div class="col-md-6">
            <p> Enter your personal details below: </p>                        
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Name</label>
                <div class="input-icon{{ $errors->has('name') ? ' has-error' : '' }}">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Name" name="name" value="{{ old('name') }}" required/>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="input-icon{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required/>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon{{ $errors->has('password') ? ' has-error' : '' }}">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" value="{{ old('password') }}" required/>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                <div class="controls">
                    <div class="input-icon{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <i class="fa fa-check"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" required/>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>            
        </div>

        <div class="col-md-6 rightbox">
            <h4><strong>Get a chance to build yourself</strong></h4>
            <img src="/images/signup/yoga-pose2.jpg" style="width:100%;">
        </div>
    </div>
    <div class="form-group">
        <label>
            <input type="checkbox" class="{{ $errors->has('tnc') ? ' has-error' : '' }}" name="tnc" /> I agree to the
            <a href=""> Code of Conduct</a>
        </label>
        @if ($errors->has('tnc'))
            <span class="help-block">
                <strong>You must agree with our Code of Conduct.</strong>
            </span>
        @endif        
    </div>
    <div class="form-group">
        <a href="{{url('/auth/login')}}">I have account</a>
    </div>
    <div class="form-actions">
        <a href="{{url('/')}}" class="btn red btn-outline"> Back Home </a>         
        <button type="submit" class="btn green pull-right"> Sign Up </button>
    </div>
</form>
<!-- END REGISTRATION FORM -->

</div>

