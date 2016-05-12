@extends('layout')
@section('content')
<section class="Section Section--dark">
    <h1 class="Section__heading">Welcome to Nutrition section !</h1>
    <p style="flex-basis: 100%; font-size: 22px">Chose a nutrition plan depend on your goal, and enjoy it in the way.</p>
    <div class="Section__media">
        <div class="Media Media--workout">
            <img src="/img/BODY_TYPE_LOGO.jpg" style="width: 70%">
            <a href="/nutrition/nutrition_by_body_types" class="Button Button--red Button--center">Nutrition by body types</a>
            <div class="Media__body">If you will choose this section, we will provide you with a workout plan according to your body type. Nutrition plan you gonna get also.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/Pre-Workout-Nutrition.jpg" style="width: 64.3%">
            <a href="/pages/nutrition_before_workout" class="Button Button--red Button--center">Nutrition before workout</a>
            <div class="Media__body">The human body is a remarkably adaptable machine. Even if years and years of neglect have allowed pound after pound of fat to fill out your frame.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/Postworkoutnutrition.jpg" style="width: 81.2%">
            <a href="/pages/nutrition_after_workout" class="Button Button--red Button--center">Nutrition after workout</a>
            <div class="Media__body">The secret to gaining muscle is to get stronger. The stronger you get, meaning the more weight your can lift in the gym, the more muscular you’ll be.</div>
        </div>
    </div>
</section>
@stop
