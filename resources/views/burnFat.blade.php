@extends('layout')
@section('content')
<section class="Section Section--dark">
    <h1 class="Section__heading">CHOOSE ONE OF THE SECTION BELOW TO GET WORKOUT PLAN</h1>
    <p style="flex-basis: 100%; font-size: 22px">Chose a program depend of goal, and enjoy it in the way.</p>
    <div class="Section__media">
        <div class="Media Media--workout">
            <img src="/img/buttocks.jpg" style="width: 79.5%">
            <a href="/pages/buttocks" class="Button Button--red Button--center">Burning fat on the buttocks</a>
            <div class="Media__body">Five basic rules performing squats with a weight for the girls' bodies. All about how to obtain the elastic buttocks and thighs tightened with just one exercise.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/belly.jpg" style="width: 101%">
            <a href="/pages/belly" class="Button Button--red Button--center">Burning belly fat</a>
            <div class="Media__body">Strategy training for quick burning of fat on the abdomen and other troubled areas. Why is efficient to exercise on an empty stomach early in the morning.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/thighs.jpg" style="width: 70.5%">
            <a href="/pages/female_legs" class="Button Button--red Button--center">Burn fat in the legs and thighs</a>
            <div class="Media__body">Woman's legs - the object of male attention. Accordingly, their condition, including the volume of the thighs and calves must be perfect.</div>
        </div>
    </div>
</section>
@stop
