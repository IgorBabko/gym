<div class="Modal Modal--register">
    <div class="Modal__content">
        <h1 class="Modal__header">Registration</h1>
        <div class="Modal__body">
            <form method="POST" action="{{ url('/register') }}" class="Modal__form Modal__form--register">
                <label class="Label" for="name">Name:</label>
                <input type="text" name="name" id="name" class="Input">
                <label class="Label" for="email">Email:</label>
                <input type="email" name="email" id="email" class="Input">
                <label class="Label" for="password">Password:</label>
                <input type="password" name="password" id="password" class="Input">
                <label class="Label" for="password_confirmation">Confirm password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="Input">
                {!! csrf_field() !!}
                <button type="submit" class="Button Button--modal Button--yellow">Register</button>
            </form>
        </div>
    </div>
</div>
<div class="Modal__overlay"></div>
