@extends ('dashboard.layouts.main')

@section ('content')
    <div class="content-header">
        <h1>
            @yield('contentheader_title', 'Pages')
            <small>@yield('contentheader_description')</small>
            <a href="{{ route('dashboard.pages.create') }}" class="btn btn-success"><i class="fa fa-plus"></i>Add</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </div>
    <div class="content body">
        @forelse ($pages as $page)
            <div class="col-sm-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ $page->name }}</h3>
                </div>
                <div class="box-body">
                  <p>{{ $page->description }}</p>
                  <a href="/dashboard/pages/{{ $page->name }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                </div>
              </div>
            </div>
        @empty
            There're no pages
        @endforelse
        
        {!! $pages->links() !!}
    </div>
@stop
