@extends ('layout')

@section ('content')
<section class="Section Section--dark">
     <h1 class="Section__heading">Welcome to Metrix section</h1>
    <p style="flex-basis: 100%; font-size: 22px">Calculate your calories per day, check if your weigth is ok for your height and how much water you should drink per day.</p>
    <div class="Section__media">
        <div class="Media Media--calc">
            <h2 class="Media__heading" style="color: red">BMI</h2>
            <div class="Media__body" style="color: green">Body mass index calculator will help you to check if your weight is good for your height.</div>
            <img src="/img/body.png" style="width: 65%">
            <a href="/metrics/bmi" class="Button Button--red Button--center">Calculate</a>
        </div>
        <div class="Media Media--calc">
            <h2 class="Media__heading" style="color: red">BMR</h2>
            <div class="Media__body" style="color: green">Basal metabolic rate calculator will help you to calculate calories you need each day.</div>
            <img src="/img/caloriesbmr.jpg" style="width: 100%">
            <a href="/metrics/bmr" class="Button Button--red Button--center">Calculate</a>
        </div>
        <div class="Media Media--calc">
            <h2 class="Media__heading" style="color: red">Water</h2>
            <div class="Media__body" style="color: green">Water calculator will help you to calculate how much water you need to drink per day.</div>
            <img src="/img/waterglass.png" style="width: 40%">
            <a href="/metrics/water" class="Button Button--red Button--center">Calculate</a>
        </div>
    </div>
</section>
@stop
