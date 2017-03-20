@extends('auth.app')

@section('title')
    Register
@endsection

@section('content')
<div class="auth-box ">
    <div class="left">
        <div class="content">
            <div class="logo text-center"><img src="klorofil/img/logo-dark.png" alt="Klorofil Logo"></div>
            <form class="form-auth-small" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label sr-only">Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Your name">
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
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
                <div class="form-group">
                    <label for="password-confirm" class="control-label sr-only">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                
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
