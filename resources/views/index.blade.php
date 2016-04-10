@extends('layout')
@section('content')
<div class="Header">
    <div class="Header__content">
        <h1 class="Header__heading">Lorem ipsum dolor sit amet</h1>
        <div class="Header__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti reprehenderit, facilis expedita minima fugiat fugit enim debitis ea vero ut modi dolorem in repudiandae illum maxime labore autem eius dicta!</div>
        <div class="Header__sections">
            <div class="Section">
                <h2 class="Section__heading">Lorem ipsum</h2>
                <img src="/img/food1.png" class="Section__picture" alt="food">
                <div class="Section__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
            </div>
            <div class="Section">
                <h2 class="Section__heading">Lorem ipsum</h2>
                <img src="/img/dumbbells.jpg" class="Section__picture Section__picture--program" alt="program">
                <div class="Section__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
            </div>
        </div>
        <button class="Header__button">Let's start</button>
    </div>
</div>
@stop
