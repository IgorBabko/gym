<div class="Auth">
    <div class="Auth__modal">
        <h1 class="Auth__header">Authentication</h1>
        <div class="Auth__body">
            <form method="POST" action="{{ url('/login') }}" class="Auth__form">
                {!! csrf_field() !!}
                <input type="email" name="email" class="Input" placeholder="Email">
                <input type="password" name="password" class="Input" placeholder="Password">
                <button type="submit" class="Button Button--login Button--yellow">Log In</button>
                <a href="{{ url('/password/reset') }}" class="Auth__reset-password">Forgot Your Password?</a>
            </form>
        </div>
    </div>
</div>
<div class="Auth__overlay"></div>
