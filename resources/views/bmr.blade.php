@extends ('layout')

@section ('content')
<div class="Block Block--flex">
    {!! Breadcrumbs::render('bmr') !!}
    <h1 class="Block__heading">Basal metabolic rate</h1>
    <form method="POST" class="Form" action="{{ url('/metrics/bmr') }}">
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
            Height (cm):
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
        <label class="Label" style="color: red"><strong>Activity level</strong></label>
        <p>minimum (no physical activities), low (exercise 1-3 times per week), medium (3-5 days a week), high (6-7 times per week), very high (training more than once a day) .</p>
        <!-- <p>
            минимальный (никаких физических нагрузок), низкий (физические нагрузки 1-3 раза в неделю), средний (3-5 дней в неделю), высокий (6-7 раз в неделю), очень высокий (тренировки чаще, чем раз в день).
        </p> -->
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
            <span class="Error"></span>
        </label>
        <br>
        {!! csrf_field() !!}
        <button type="submit" class="Button Button--red">Calculate</button>
    </form>
    <div class="Block__description">
        <h2>Формула Харрис-Бенедикт</h2><br>
        <strong>Формула Харрис-Бенедикта</strong> — метод определения суточной нормы калорий, необходимых организму для поддержания существующего веса тела. Потребляя количество калорий, рассчитанных по формуле, вы не будете ни худеть, ни увеличивать вес.<br><br>
        <strong>Важно отметить, что расчеты будут точны лишь для среднего телосложения — для излишне худых, излишне полных или даже для мускулистых людей данная формула не подходит, поскольку не учитывает индивидуальные особенности и потребности.</strong> 
    </div>
</div>
@stop
