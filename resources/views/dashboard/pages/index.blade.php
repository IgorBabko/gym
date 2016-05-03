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
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
        @endif
        @forelse ($pages as $page)
            <div class="col-sm-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ $page->name }}</h3>
                </div>
                <div class="box-body">
                  <p>{{ $page->description }}</p>
                  <a href="/dashboard/pages/{{ $page->slug }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                  {{ Form::open( [ 'route' => ['dashboard.pages.destroy', $page->slug ], 'method' => 'DELETE', 'class' => 'delete-page-button' ] ) }}
                      <button class="btn btn-danger"><i class="fa fa-remove"></i>Delete</a>
                  {{ Form::close() }}
                </div>
              </div>
            </div>
        @empty
            There're no pages
        @endforelse
        
        {!! $pages->links() !!}
    </div>
@stop
