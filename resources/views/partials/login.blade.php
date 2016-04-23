<div class="Modal Modal--login">
    <div class="Modal__content">
        <h1 class="Modal__header">Authentication</h1>
        <div class="Modal__body">
            <form method="POST" action="{{ url('/login') }}" class="Modal__form Modal__form--login">
                <label class="Label">Email:</label>
                <input type="email" name="email" class="Input">
                <label class="Label">Password:</label>
                <input type="password" name="password" class="Input">
                {!! csrf_field() !!}
                <button type="submit" class="Button Button--modal Button--yellow">Log In</button>
                <a href="{{ url('/password/reset') }}" class="Modal__reset-password">Forgot Your Password?</a>
            </form>
        </div>
    </div>
</div>
<div class="Modal__overlay"></div>
