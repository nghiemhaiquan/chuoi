@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.song') }}
                    <small>{{ trans('website.name') }}</small>
                </h1>
            </div>
            <div class="col-lg-7">
                {!! Form::open([
                    'action' => ['SongController@update', $song->id],
                    'method' => 'PUT',
                    'class' => 'form-horizontal',
                    'enctype' => 'multipart/form-data'
                ]) !!}
                    {!! Form::text('link', $song->link) !!}
                    {!! Form::text('description', $song->description) !!}
                    {!! Form::file('image_cover') !!}
                    {!! Form::text('lyric', $song->lyric) !!}
                    {!! Form::select('genre_id', $genres, $song->genre_id) !!}
                    {!! Form::select('singer_id', $singers, $song->singer_id) !!}
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
