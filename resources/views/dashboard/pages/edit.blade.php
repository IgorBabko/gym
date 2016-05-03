@extends ('dashboard.layouts.main')

@section ('content')
<div class="content-header">
    <h1>
        Edit page
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <li><a href="#">Forms</a>
        </li>
        <li class="active">General Elements</li>
    </ol>
</div>
<div class="content body">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {{ Form::model( $page, [ 'route' => [ 'dashboard.pages.update', $page->slug ] ] ) }}
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('descripion', 'Description') }}
                    {{ Form::text('description', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('text', 'Text') }}
                    {{ Form::textarea('text', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        {{ Form::close() }}
    </div>
</div>
@stop
