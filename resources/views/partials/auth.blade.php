<div class="Auth">
    <form method="POST" action="{{ url('/login') }}" class="Auth__form">
        {!! csrf_field() !!}
        <input type="email" name="email" class="Input">
        <input type="password" name="password" class="Input">
        <input type="checkbox" name="remember" class="Checkbox"> Remember Me
        <button type="submit"><i class="fa fa-btn fa-sign-in"></i>Login</button>
        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
    </form>
</div>
<div class="Auth__overlay"></div>
