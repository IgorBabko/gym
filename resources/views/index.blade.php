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
<div class="sectio">
    <div class="sectio__picture"></div>
    <div class="sectio__content">
        <h1 class="sectio__heading">Some header</h1>
        lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores laudantium ut distinctio quod nesciunt labore reiciendis at placeat culpa ipsum voluptatum debitis voluptates molestiae et, mollitia inventore nostrum fuga, ea incidunt voluptas aperiam tenetur hic alias dolore quas. incidunt, laborum iusto tenetur unde libero excepturi placeat, molestias quo doloribus sapiente.
        lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores laudantium ut distinctio quod nesciunt labore reiciendis at placeat culpa ipsum voluptatum debitis voluptates molestiae et, mollitia inventore nostrum fuga, ea incidunt voluptas aperiam tenetur hic alias dolore quas. incidunt, laborum iusto tenetur unde libero excepturi placeat, molestias quo doloribus sapiente.
    </div>
</div>
<div class="sectio sectio--red">
    <div class="sectio__content" style="flex-basis: 30%">
        <h1 class="sectio__heading">Some header</h1>
        lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores laudantium ut distinctio quod nesciunt labore reiciendis at placeat culpa ipsum voluptatum debitis voluptates molestiae et, mollitia inventore nostrum fuga, ea incidunt voluptas aperiam tenetur hic alias dolore quas. incidunt, laborum iusto tenetur unde libero excepturi placeat, molestias quo doloribus sapiente.
        lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores laudantium ut distinctio quod nesciunt labore reiciendis at placeat culpa ipsum voluptatum debitis voluptates molestiae et, mollitia inventore nostrum fuga, ea incidunt voluptas aperiam tenetur hic alias dolore quas. incidunt, laborum iusto tenetur unde libero excepturi placeat, molestias quo doloribus sapiente.
    </div>
    <div class="sectio__picture sectio__picture--food"></div>
</div>
<div class="sectio sectio--parallax"></div>
@stop
