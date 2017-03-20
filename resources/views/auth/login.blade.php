@extends('auth.app')

@section('title')
    Login
@endsection

@section('content')
<div class="auth-box ">
    <div class="left">
        <div class="content">
            <div class="logo text-center"><img src="klorofil/img/logo-dark.png" alt="Klorofil Logo"></div>
            <form class="form-auth-small" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="signup-email" class="control-label sr-only">Email</label>
                    <input type="email" class="form-control" id="signup-email" value="{{ old('email') }}" required="true" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="signup-password" class="control-label sr-only">Password</label>
                    <input type="password" class="form-control" id="signup-password" value="thisisthepassword" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Remember me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                <div class="bottom">
                    <span><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">Forgot password?</a></span>
                </div>
            </form>
        </div>
    </div>
    <div class="right">
        <div class="overlay"></div>
        <div class="content text">
            <h1 class="heading">Free Bootstrap dashboard template</h1>
            <p>by The Develovers</p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
