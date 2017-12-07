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
                    'enctype' => 'multipart/form-data'
                ]) !!}
                <div class="form-group">
                    <label>{{ trans('website.link') }}</label>
                    {!! Form::text('link', $song->link,[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.name') }}</label>
                    {!! Form::textarea('description', $song->description,[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.image_cover') }}</label>
                    {!! Form::file('image_cover',[
                        'class'=>'form-control'
                    ]) !!}
                
                <div class="form-group">
                    <label>{{ trans('website.lyric') }}</label>
                    {!! Form::textarea('lyric', $song->lyric,[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.genre') }}</label>
                    {!! Form::select('genre_id', $genres, $song->genre_id,[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.singer') }}</label>
                    {!! Form::select('singer_id', $singers, $song->singer_id,[
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
