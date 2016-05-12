@extends ('layout')

@section ('content')
<div class="Block Block--flex">
    {!! Breadcrumbs::render('bmi') !!}
    <h1 class="Block__heading">Body Mass Index</h1>
    <form method="POST" class="Form" action="{{ url('/metrics/bmi') }}">
        {!! csrf_field() !!}
        <label class="Label">Gender:</label>
        <label class="Label Label--radio">
            <input type="radio" name="coeff" value="88.36" class="Radio">
            Male
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="coeff" value="447.6" class="Radio">
            Female
            <span class="Error"></span>
        </label>
        <label class="Label">
            Heigh (meters):
            <input type="text" name="height" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Weight (kg):
            <input type="text" name="weight" class="Input">
            <span class="Error"></span>
        </label>
        <br>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Calculate</button>
    </form>
    <div class="Block__description">
        <h1 class="Block__heading"><strong>Calculate Your Body Mass Index</strong></h1>
        <p> <strong>This bmi calculator calculates body mass index</strong> from your Weight and Height and also shows how your weight compares to others of the same height</p>
        <p>Enter your weight and height and wee what the calculator will tell you, good luck!</p>
           
    </div>
</div>
@stop
