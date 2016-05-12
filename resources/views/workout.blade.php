@extends('layout')
@section('content')
<section class="Section Section--dark">
    <h1 class="Section__heading">Choose one of the section below to get workout plan</h1>
    <p style="flex-basis: 100%; font-size: 22px">Chose a program depend of goal, and enjoy it in the way.</p>
    <div class="Section__media">
        <div class="Media Media--workout">
            <img src="/img/endoectomezo.jpg" style="width: 70%">
            <a href="/workout/training_by_body_types" class="Button Button--red Button--center">Workout by body types</a>
            <div class="Media__body">If you will choose this section, we will provide you with a workout plan according to your body type. Nutrition plan you gonna get also.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/fat_diet.png" style="width: 93%">
            <a href="/workout/burnFat" class="Button Button--red Button--center">Workout to burn fat</a>
            <div class="Media__body">The human body is a remarkably adaptable machine. Even if years and years of neglect have allowed pound after pound of fat to fill out your frame. In that sense, time is your side!</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/bodybuilder.png" style="width: 67%">
            <a href="/workout/buildMuscle" class="Button Button--red Button--center">Workout to build muscle</a>
            <div class="Media__body">The secret to gaining muscle is to get stronger. The stronger you get, meaning the more weight your can lift in the gym, the more muscular you’ll be.</div>
        </div>
    </div>
</section>
@stop
