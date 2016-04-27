@extends ('layout')

@section ('content')
<section class="Section Section--dark">
    <h1 class="Section__heading">Workout by body types</h1>
    <p style="flex-basis: 100%; font-size: 22px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</p>
    <div class="Section__media">
        <div class="Media Media--workout">
            <img src="/img/3.jpg" style="width: 100%">
            <a href="/pages/ectomorph" class="Button Button--red Button--center">Ectomorph</a>
            <div class="Media__body">LLorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.oLorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.rem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/3.jpg" style="width: 100%">
            <a href="/pages/mesomorph" class="Button Button--red Button--center">Mesomorph</a>
            <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/3.jpg" style="width: 100%">
            <a href="/pages/endomorph" class="Button Button--red Button--center">Endomorph</a>
            <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
        </div>
    </div>
</section>
@stop
