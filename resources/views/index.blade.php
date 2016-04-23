@extends('layout')
@section('content')
<header class="Section Section--header">
    <div class="Section__content">
        <h1 class="Section__heading">Lorem ipsum dolor sit amet</h1>
        <div class="Section__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti reprehenderit, facilis expedita minima fugiat fugit enim debitis ea vero ut modi dolorem in repudiandae illum maxime labore autem eius dicta!</div>
        <div class="Section__media">
            <div class="Media">
                <h2 class="Media__heading">Lorem ipsum</h2>
                <img src="/img/food1.png" class="Media__picture" alt="food">
                <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
            </div>
            <div class="Media">
                <h2 class="Media__heading">Lorem ipsum</h2>
                <img src="/img/dumbbells.jpg" class="Media__picture Media__picture--program" alt="program">
                <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
            </div>
        </div>
        <button class="Button Button--yellow">Let's start</button>
    </div>
</header>
<section class="Section Section--dark">
    <div class="Section__content">
        <h1 class="Section__heading">Choose Your gender</h1>
        <div class="Section__media">
            <div class="Media Media--gender">
                <img src="/img/man-dark.png" class="Media__picture Media__picture--man" alt="food">
                <!-- <button class="Button Button--blue">Male</button> -->
            </div>
            <div class="Media Media--gender">
                <img src="/img/woman1-dark.png" class="Media__picture Media__picture--woman" alt="program">
                <!-- <button class="Button Button--pink">Female</button> -->
            </div>
        </div>
    </div>
</section>
@stop
