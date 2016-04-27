@if ($breadcrumbs)
    <ul class="Breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <li class="Breadcrumb__item">
                    <a href="{{ $breadcrumb->url }}" class="Breadcrumb__link">{{ $breadcrumb->title }}</a>
                </li>
                &nbsp;/&nbsp;
            @else
                <li class="Breadcrumb__item">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif
