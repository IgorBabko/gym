@extends('layout')
@section('content')
<section class="Section Section--dark">
    <h1 class="Section__heading">Workout</h1>
    <p style="flex-basis: 100%; font-size: 22px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</p>
    <div class="Section__media">
        <div class="Media Media--workout">
            <img src="/img/4.jpg" style="width: 100%">
            <a href="/workout/training_by_body_types" class="Button Button--red Button--center">Workout by boby types</a>
            <div class="Media__body">LLorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.oLorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.rem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/4.jpg" style="width: 100%">
            <a href="/workout/lose_weight" class="Button Button--red Button--center">Workout to burn fat</a>
            <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/4.jpg" style="width: 100%">
            <a href="/workout/lose_weight" class="Button Button--red Button--center">Workout to build muscle</a>
            <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
        </div>
    </div>
</section>
@stop
