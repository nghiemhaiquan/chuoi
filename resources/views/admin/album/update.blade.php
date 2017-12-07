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
                    'class' => '',
                    'enctype' => 'multipart/form-data'
                ]) !!}
                <div class="form-group">
                    <label>{{ trans('website.name') }}</label>
                    {!! Form::text('name', $album->name,[
                        'class'=>'form-control',
                        'placeholder' => trans('website.name'),
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.description') }}</label>
                    {!! Form::textarea('description', $album->description,[
                        'id'=>'demo',
                        'class'=>'form-control',
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.image_cover') }}</label>
                    {!! Form::file('image_cover',[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                    {!! Form::button(trans('website.update'), [
                        'class' => 'btn btn-default',
                        'type' => 'submit',
                    ]) !!}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
