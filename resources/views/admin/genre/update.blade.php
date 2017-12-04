@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.genre') }}
                    <small>{{ trans('website.name') }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7">
                {!! Form::open([
                    'action' => ['GenreController@update', $genre->id],
                    'method' => 'PUT',
                ]) !!}
                    {!! Form::text('name', $genre->name) !!}
                    {!! Form::button(trans('website.update'), [
                        'class' => 'btn btn-block btn-success btn-xs',
                        'type' => 'submit',
                    ]) !!}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
