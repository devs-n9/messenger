@extends('layout')

@section('content')
<div id="particles-js">
        <div class="col-md-9"></div>
        <div class="col-md-3 login-box">
            <form role="form msg-form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>E-Mail Address</label>
                        <input type="email" class="form-control msg-input" name="email" value="{{ old('email') }}"> 
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> 
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>Password</label>
                    <input type="password" class="form-control msg-input" name="password"> 
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span> 
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-success msg-btn">
                            <i class="fa fa-btn fa-sign-in"></i>Login
                        </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                </div>
            </form>
        </div>
</div>
@endsection