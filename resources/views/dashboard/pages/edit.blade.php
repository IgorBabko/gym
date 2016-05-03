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
        {{ Form::model( $page, [ 'route' => [ 'dashboard.pages.update', $page->slug ], 'method' => 'PUT' ] ) }}
            <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', old('name') ?? null, ['class' => 'form-control']) }}
                    <span class="help-block">{{ $errors->first('name') ?? '' }}</span>
                </div>
                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    {{ Form::label('descripion', 'Description') }}
                    {{ Form::text('description', old('description') ?? null, ['class' => 'form-control']) }}
                    <span class="help-block">{{ $errors->first('description') ?? '' }}</span>
                </div>
                </div>
                <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
                    {{ Form::label('text', 'Text') }}
                    {{ Form::textarea('text', old('text') ?? null, ['class' => 'form-control']) }}
                    <span class="help-block">{{ $errors->first('text') ?? '' }}</span>
                </div>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop
