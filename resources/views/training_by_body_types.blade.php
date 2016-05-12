@extends ('layout')

@section ('content')
<section class="Section Section--dark">
    <h1 class="Section__heading">Workout by body types</h1>
    <p style="flex-basis: 100%; font-size: 22px">Not every body's created equal. Before you start your training and nutrition regimen, it's a good idea to figure out your body type. Knowing which of the three basic body types you're closest to will help you better tailor your diet and exercise plan and set realistic, attainable goals that pave the way to your success.</p>
    <h4 class="Section__heading"><a href="what_is_my_body_type">What is my body type?</a></h4>
    <div class="Section__media">
        <div class="Media Media--workout">
            <img src="/img/ectomorph.png" style="width: 100%">
            <a href="/pages/ectomorph" class="Button Button--red Button--center">Ectomorph</a>
            <div class="Media__body"><p>An ectomorph is a typical skinny guy.</p><p>Ecto’s have a light build with small joints and lean muscle. Usually ectomorph’s have long thin limbs with stringy muscles.</p> <p>Shoulders tend to be thin with little width.</p></div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/mezomorph.png" style="width: 100%">
            <a href="/pages/mesomorph" class="Button Button--red Button--center">Mesomorph</a>
            <div class="Media__body"><p>Mesomorphs are the best body type for bodybuilding. They find it quite easy to gain and lose weight.</p><p>They are naturally strong which is the perfect platform for building muscle.</p></div>
        </div>
        <div class="Media Media--workout">
            <img src="/img/endomorph.png" style="width: 100%">
            <a href="/pages/endomorph" class="Button Button--red Button--center">Endomorph</a>
            <div class="Media__body">
                <p>The endomorph body type is solid and generally soft. <br>Endomorphs gain fat very easily. Endo’s are usually of a shorter build with thick arms and legs.</p>Muscles are strong, especially the upper legs. 
            </div>
        </div>
    </div>
</section>
@stop
