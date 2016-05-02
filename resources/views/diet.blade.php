@extends('layout')

@section ('content')
<section class="Section Section--dark">
    <div class="Section__media">
    @foreach($pages as $page)
        <div class="Media Media--diet">
            <img src="/img/1.jpg" style="width: 100%">
            <a href="/pages/{{ $page->name }}" class="Button Button--red Button--center">{{ $page->name }}</a>
            <div class="Media__body">{{ $page->description }}</div>
        </div>
    @endforeach
    </div>
</section>
@stop
