@extends ('layout')

@section ('content')
<div class="Block Block--flex">
    <h1 class="Block__heading" style="text-align: center">Welcome to Support section</h1>
    <form method="post" class="Form" action="{{ url('/support') }}">
        <label class="Label">
            Name:
            <input type="text" name="name" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Email:
            <input type="email" name="email" class="Input">
            <span class="error"></span>
        </label>
        <label class="Label">Message</label>
        <textarea class="Textarea"></textarea>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Send</button>
    </form>
      <div class="Block__description">
        <br>
        <p>Detected any bag or any trouble with our web site, just describe the problem and our team will fix it as soon as possible.</p>
           
    </div>
</div>
@stop
