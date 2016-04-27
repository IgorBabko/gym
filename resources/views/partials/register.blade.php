<div class="Modal Modal--register">
    <div class="Modal__content">
        <h1 class="Modal__header">Registration</h1>
        <div class="Modal__body">
            <form method="POST" action="{{ url('/register') }}" class="Form">
                <label class="Label">
                    Name:
                    <input type="text" name="name" class="Input">
                    <span class="Error"></span>
                </label>
                <label class="Label">
                    Email:
                    <input type="email" name="email" class="Input">
                    <span class="Error"></span>
                </label>
                <label class="Label">
                    Password:
                    <input type="password" name="password" class="Input">
                    <span class="Error"></span>
                </label>
                <label class="Label">
                    Confirm password:
                    <input type="password" name="password_confirmation" class="Input">
                    <span class="Error"></span>
                </label>
                {!! csrf_field() !!}
                <button type="submit" class="Button Button--modal Button--yellow">Register</button>
            </form>
        </div>
    </div>
</div>
<div class="Modal__overlay"></div>
