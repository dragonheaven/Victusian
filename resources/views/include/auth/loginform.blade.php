
<div class="content">

<!-- BEGIN LOGIN FORM -->
<form class="login-form" action="{{ url('/auth/login') }}" method="post">
{{ csrf_field() }}
    <h3 class="form-title">Login to your account</h3>
    <div class="row">
        <div class="col-sm-6">
            <h4>Make the best of your life</h4>            
            <img src="/images/signup/yoga-tree.jpg" style="width:100%">
            <p>We join together to grow together, just like a flower flourishes in nature within a healthy ecosystem.</p>
        </div>
        <div class="col-sm-6">
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any email and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">email</label>
                <div class="input-icon{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"  value="{{ old('email') }}"/> </div>
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
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"  value="{{ old('password') }}"/> </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('verified') ? ' has-error' : '' }}">
                @if ($errors->has('verified'))
                    <span class="help-block">
                        <strong>{{ $errors->first('verified') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1" /> Remember me </label>
                <button type="submit" class="btn green pull-right"> Login </button>
            </div>
            <div class="login-options">
                <h4>Or login with</h4>
                <ul class="social-icons">
                    <li>
                        <a class="facebook" data-original-title="facebook" href="{{url('/socialauth/facebook')}}"> </a>
                    </li>
                    <li>
                        <a class="twitter" data-original-title="Twitter" href="{{url('/socialauth/twitter')}}"> </a>
                    </li>
                    <li>
                        <a class="googleplus" data-original-title="Goole Plus" href="{{url('/socialauth/google')}}"> </a>
                    </li>
                    <li>
                        <a class="linkedin" data-original-title="Linkedin" href="{{url('/socialauth/linkedin')}}"> </a>
                    </li>
                </ul>
            </div>
            <div class="forget-password">
                <h4>Forgot your password ?</h4>
                <p> no worries, click
                    <a href="{{url('/auth/reset')}}"> here </a> to reset your password. </p>
            </div>
        </div>
    </div>
    
    <div class="create-account">
        <p> Don't have an account yet ?&nbsp;
            <a href="{{url('/auth/signup')}}"> Create an account </a>
        </p>
    </div>
</form>
<!-- END LOGIN FORM -->

</div>