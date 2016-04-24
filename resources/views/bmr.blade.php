@extends ('layout')

@section ('content')
<div class="Block">
    <h1 class="Block__heading">Basal metabolic rate</h1>
    <form method="POST" class="Form" action="{{ url('/metrics/calcBmr') }}">
        {!! csrf_field() !!}
        <label class="Label">Gender</label>
        <label class="Label Label--radio">
            <input type="radio" name="gender" value="male" class="Radio">
            Male
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="gender" value="female" class="Radio">
            Female
        </label>
        <label class="Label">
            Height (sm):
            <input type="text" name="height" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Weight (kg):
            <input type="text" name="weight" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">
            Age:
            <input type="text" name="age" class="Input">
            <span class="Error"></span>
        </label>
        <label class="Label">Activity level</label>
        <p>
            Разделяют пять типов физической активности: минимальный (никаких физических нагрузок), низкий (физические нагрузки 1-3 раза в неделю), средний (3-5 дней в неделю), высокий (6-7 раз в неделю), очень высокий (тренировки чаще, чем раз в день).
        </p>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.2" class="Radio">
            Minimal 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.375" class="Radio">
            Low 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.55" class="Radio">
            Medium 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.725" class="Radio">
            High 
        </label>
        <label class="Label Label--radio">
            <input type="radio" name="activity_level" value="1.9" class="Radio">
            Very high 
        </label>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Calculate</button>
    </form>
    <div class="Block__info">
    </div>
</div>
@stop
