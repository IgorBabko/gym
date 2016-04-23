<div class="Modal Modal--register">
    <div class="Modal__content">
        <h1 class="Modal__header">Registration</h1>
        <div class="Modal__body">
            <form method="POST" action="{{ url('/login') }}" class="Modal__form">
                {!! csrf_field() !!}
                <label class="Label" for="name">Name:</label>
                <input type="text" name="name" class="Input">
                <label class="Label" for="">Email:</label>
                <input type="email" name="email" class="Input">
                <label class="Label" for="">Password:</label>
                <input type="password" name="password" class="Input">
                <label class="Label" for="">Confirm password:</label>
                <input type="password" name="password_confirmation" class="Input">
                <button type="submit" class="Button Button--modal Button--yellow">Register</button>
            </form>
        </div>
    </div>
</div>
<div class="Modal__overlay"></div>
