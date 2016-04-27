@extends ('layout')

@section ('content')
<section class="Section Section--dark">
    <div class="Section__media">
        <div class="Media Media--calc">
            <h2 class="Media__heading">BMI</h2>
            <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
            <img src="/img/2.jpg" style="width: 100%">
            <a href="/metrics/bmi" class="Button Button--red Button--center">Calculate</a>
        </div>
        <div class="Media Media--calc">
            <h2 class="Media__heading">BMR</h2>
            <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
            <img src="/img/2.jpg" style="width: 100%">
            <a href="/metrics/bmr" class="Button Button--red Button--center">Calculate</a>
        </div>
        <div class="Media Media--calc">
            <h2 class="Media__heading">Water</h2>
            <div class="Media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, eum.</div>
            <img src="/img/2.jpg" style="width: 100%">
            <a href="/metrics/water" class="Button Button--red Button--center">Calculate</a>
        </div>
    </div>
</section>
@stop
