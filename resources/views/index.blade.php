@extends('layout')
@section('content')
<ul class="Slider bxslider">
    <li class="Slider__item">
        <img src="/img/1.jpg"/>
        <div class="Slider__info Slider__info--bottom">
            <h1 class="Slider__heading">Niko Bellic</h1>
            <p class="Slider__description">
                lorem ipsum dolor sit amet, consectetur adipisicing elit. fuga magni corporis explicabo esse asperiores, sit at expedita praesentium. error, rerum.
            </p>
            <button class="Button Button--red pull-left">more info</button>
        </div>
    </li>
    <li class="Slider__item">
        <img src="/img/3.jpg"/>
        <div class="Slider__info Slider__info--right">
            <h1 class="Slider__heading">Niko Bellic</h1>
            <p class="Slider__description">
                lorem ipsum dolor sit amet, consectetur adipisicing elit. fuga magni corporis explicabo esse asperiores, sit at expedita praesentium. error, rerum.
            </p>
            <button class="Button Button--red pull-left">More info</button>
        </div>
    </li>
    <li class="Slider__item">
        <img src="/img/4.jpg"/>
        <div class="Slider__info Slider__info--top">
            <h1 class="Slider__heading">Niko Bellic</h1>
            <p class="Slider__description">
                lorem ipsum dolor sit amet, consectetur adipisicing elit. fuga magni corporis explicabo esse asperiores, sit at expedita praesentium. error, rerum.
            </p>
            <button class="Button Button--red pull-left">More info</button>
        </div>
    </li>
</ul>
@stop
