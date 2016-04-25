@extends ('layout')

@section ('content')
<div class="Block">
    <h1 class="Block__heading">Body Mass Index</h1>
    <form method="post" class="form" action="{{ url('/metrics/calcBmi') }}">
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
        <label class="Label">Question</label>
        <textarea class="Textarea">niko bellic</textarea>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Ask</button>
    </form>
    <div class="Block__description">
    </div>
</div>
@stop
