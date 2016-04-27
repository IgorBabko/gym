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
    <div class="Block__description">
        Формула Харрис-Бенедикт
        Формула Харрис-Бенедикта — метод определения суточной нормы калорий, необходимых организму для поддержания существующего веса тела. Потребляя количество калорий, рассчитанных по формуле, вы не будете ни худеть, ни увеличивать вес.
        Важно отметить, что расчеты будут точны лишь для среднего телосложения — для излишне худых, излишне полных или даже для мускулистых людей данная формула не подходит, поскольку не учитывает индивидуальные особенности и потребности
        Почему состав пищи важнее калорий?
        Определение суточной нормы калорий, необходимых для поддержания веса — важный шаг для похудения или набора мышечной массы. Если вы худеете, то понижайте норму калорий на 10-20%, если набираете мышцы — повышайте на 20%.
        Кроме этого, само по себе количество калорий намного менее значимо, чем то, в каких пропорциях в рационе присутствуют жиры, белки и углеводы, поскольку 500 калорий — это как порция бурого риса и курицы на пару, так и небольшой кусок торта.
    </div>
</div>
@stop
