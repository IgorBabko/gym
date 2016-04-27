@extends ('layout')

@section ('content')
<div class="Block">
    <h1 class="Block__heading">Water</h1>
    <form method="POST" class="Form" action="{{ url('/metrics/water') }}">
        {!! csrf_field() !!}
        <label class="Label">Gender</label>
        <label class="Label Label--radio">
            <input type="radio" name="gender" value="male" class="Radio">
            Male
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="gender" value="female" class="Radio">
            Female
            <span class="Error"></span>
        </label>
        <label class="Label">
            Weight (kg):
            <input type="text" name="weight" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Physical activity (hours):
            <input type="text" name="physical-activity" class="Input">
            <span class="Error"></span>
        </label>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Calculate</button>
    </form>
    <div class="Block__description">
        <h2>Cannot drink so much water per day, solution</h2>
        Start to increase drink water step by step, add one glass of water extra every day, and get a habit to drink water once you woke up, 30 min before you start to eat breakfast.
    </div>
</div>
@stop
