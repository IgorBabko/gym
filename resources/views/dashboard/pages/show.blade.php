@extends ('dashboard.layouts.main', ['contentHeader' => 'Pages'])

@section ('content')
    @forelse ($pages as $page)
        <div class="col-sm-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $page->name }}</h3>
            </div>
            <div class="box-body">
              <p>{{ $page->description }}</p>
              <a href="/dashboard/pages/{{ $page->name }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
            </div>
          </div>
        </div>
    @empty
        There're no pages
    @endforelse
    
    {!! $pages->links() !!}
@stop
