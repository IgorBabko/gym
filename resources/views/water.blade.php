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
    <div class="Block__info">
        Разделяют пять типов физической активности: минимальный (никаких физических нагрузок), низкий (физические нагрузки 1-3 раза в неделю), средний (3-5 дней в неделю), высокий (6-7 раз в неделю), очень высокий (тренировки чаще, чем раз в день).
    </div>
</div>
@stop
