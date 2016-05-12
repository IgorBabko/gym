@extends('layout')
@section('content')
<section class="Section Section--dark">
    <h1 class="Section__heading">Choose one of the section below to get workout plan</h1>
    <p style="flex-basis: 100%; font-size: 22px">Chose a program depend of goal, and enjoy it in the way.</p>
    <div class="Section__media">
        <div class="Media Media--workout">
            <img src="/img/abs.png" style="width: 85%">
            <a href="/pages/pump_up_the_press" class="Button Button--red Button--center">Pump up the press</a>
            <div class="Media__body">After protracted celebration of the New Year holidays, or with the onset of summer, or rather beach season, we are often looking at her reflection in the mirror, we begin to feel sad.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/biceps2.jpg" style="width: 101%">
            <a href="/pages/biceps" class="Button Button--red Button--center">Pump up the biceps</a>
            <div class="Media__body">Ever wonder why powerlifters have such big arms? They do a lot of close-grip bench presses and tricep extensions. Learn how here.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/shoulders.jpg" style="width: 69.3%">
            <a href="/pages/shoulders" class="Button Button--red Button--center">Pump up the shoulders</a>
            <div class="Media__body">The concept of spending hours upon hours in the gym is long, long gone. High intensity in shorter time is where it's at these days, and rightfully so, it works.</div>
        </div>
    </div>
</section>
@stop
