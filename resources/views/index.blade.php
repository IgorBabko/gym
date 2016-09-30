@extends('layout')
@section('content')
<ul class="Slider bxslider">
    <li class="Slider__item">
        <img src="/img/slider/1.jpg"/>
        <!-- <div class="Slider__info Slider__info--bottom">
            <h1 class="Slider__heading">How to build muscle?</h1>
            <p class="Slider__description">
                The secret to gaining muscle is to get stronger. The stronger you get, <br>meaning the more weight your can lift in the gym, the more muscular you’ll be. 
            </p>
            <button class="Button Button--red pull-left">more info</button>
        </div> -->
    </li>
    <li class="Slider__item">
        <img src="/img/slider/2.jpg"/>
        <!-- <div class="Slider__info Slider__info--right">
            <h1 class="Slider__heading">How to burn fat?</h1>
            <p class="Slider__description">
                You must choose the right foods in the right amounts to keep your metabolism revved up so your six-pack will be ready for its close-up.
            </p>
            <a href="/workout/burnFat" class="Button Button--red pull-left">Click here to get more information</a>
        </div> -->
    </li>
    <li class="Slider__item">
        <img src="/img/slider/3.jpg"/>
       <!--  <div class="Slider__info Slider__info--top">
            <h1 class="Slider__heading">How never give up?</h1>
            <p class="Slider__description">
                 You're working hard but the result what you'd like to see does not comes? It seems like you need some motivation, dont worry, we have something for you.  
            </p>
            <a href="/workout/burnFat" class="Button Button--red pull-left">Click here to get more information</a>
        </div> -->
    </li>
</ul>
<div class="sectio">
    <div class="sectio__picture"></div>
    <div class="sectio__content">
        <h1 class="sectio__heading" style="color: #272727"><strong>Do you want to burn <p style="color: #e02a3d">fat?</p></strong></h1>
        <br>
        <h4><strong>Check how many calories you eat using our BMR Metric and add at least 500 calories</strong></h4>
        <h4><strong>Get a nutrition &amp workout plan and get result you so desire to see</strong></h4>
        <h4><strong>Check how much you drink daily using our Water Metric and try to drink at least 0.5 l - 1 liter more</strong></h4>
    </div>
</div>
<div class="sectio sectio--red">
    <div class="sectio__content" style="flex-basis: 30%">
        <h1 class="sectio__heading" style="color: #d6c06f"><strong>Do you want to build<p style="color: #e02a3d">muscle?</p></strong></h1>
        <br>
        <h4><strong>Check how many calories you eat using our BMR Metric and cut at least 500 calories</strong></h4>
        <h4><strong>Get a nutrition or diet plan &amp workout graphic based on your body type and get result you so desire</strong></h4>
        <h4><strong>Check how much you drink daily using our Water Metric and try to drink at least 0.75 l - 1 liter more</strong></h4>
    </div>
    <div class="sectio__picture sectio__picture--food"></div>
</div>
<div class="sectio sectio--gray">
    <div class="sectio__picture sectio__picture--program"></div>
    <div class="sectio__content" style="flex-basis: 30%">
        <h1 class="sectio__heading" style="color: #272727"><strong>Do you want to<p style="color: #e02a3d"> give up?</p></strong></h1>
        <br>
        <h4 style="color: #272727"><strong>Check our motivation section and we dont think you gonna do it!</strong></h4>
        <h4  style="color: #272727"><strong>Learn about technical and human structure in the Learn section</strong></h4>
        <h4  style="color: #272727"><strong>Watch the Big Transformation video to get more motivation and dont give up yet!</strong></h4>
    </div>
    </div>
</div>
<div class="sectio sectio--red">
    <div class="sectio__content" style="flex-basis: 30%">
        <h1 class="sectio__heading" style="color: #d6c06f"><strong>Would you like to<p style="color: #e02a3d"> get a personal coach?</p></strong></h1>
        <br>
        <h4><strong>We can propose you to create an account in our website to get Full personal coach</strong></h4>
        <h4><strong>After registration you will have ability to track your changes avery day!</strong></h4>
        <h4><strong>And, most people are looking for a right nutrition and a dishes menu, which we can provide you, based on your body data!</strong></h4><br>
        <h3 style="color: #d6c06f"><strong><em>Enjoy our web-app and share with your friends!</em></strong></h3>
    </div>
    <div class="sectio__picture sectio__picture--coach"></div>
</div>
@stop
