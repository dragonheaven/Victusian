<div class="content">
<form class="forget-form" action="{{url('/password/reset')}}" method="post">
{{ csrf_field() }}
    <h3>Forget Password ?</h3>
    <p> Enter your e-mail address below to reset your password. </p>
    <div class="form-group">
        <div class="input-icon{{ $errors->has('email') ? ' has-error' : '' }}">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
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

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
            <div class="input-icon{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" /> </div>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
        </div>
    </div>
    
    <div class="form-actions">
        <a href="{{url('/auth/login')}}" class="btn red btn-outline">Back </a>
        <button type="submit" class="btn green pull-right"> Reset Password </button>
    </div>
</form>
</div>