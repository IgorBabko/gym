@extends ('dashboard.layouts.main')

@section ('content')
    <section class="content-header">
        <h1>
            @yield('contentheader_title', 'Create page')
            <small>@yield('contentheader_description')</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>
@stop
