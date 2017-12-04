@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.album') }}
                    <small>{{ trans('website.name') }}</small>
                </h1>
            </div>
            <div class="col-lg-7">
                {!! Form::open([
                    'action' => ['AlbumController@update', $album->id],
                    'method' => 'PUT',
                    'class' => 'form-horizontal',
                    'enctype' => 'multipart/form-data'
                ]) !!}
                    {!! Form::text('name', $album->name) !!}
                    {!! Form::textarea('description', $album->description) !!}
                    {!! Form::file('image_cover') !!}
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
