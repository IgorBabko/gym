<form method="POST" action="{{ url('/login') }}">
    {!! csrf_field() !!}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label >E-Mail Address</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <strong>{{ $errors->first('email') }}</strong>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label>Password</label>
        <input type="password" name="password">
        @if ($errors->has('password'))
            <strong>{{ $errors->first('password') }}</strong>
        @endif
    </div>

    <input type="checkbox" name="remember"> Remember Me
    <button type="submit">
        <i class="fa fa-btn fa-sign-in"></i>login
    </button>
    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
</form>
