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
                <div class="playlist">
                    <img src="">
                    {!! Form::open([
                        'action' => ['AlbumController@createAlbumDetails', $album->id],
                        'method' => 'PUT',
                    ]) !!}
                    <div class="form-group">
                        <label>{{trans('website.name')}}</label>
                        {!! Form::text('name', $album->name,[
                        'class'=>'form-control',
                        'placeholder' => trans('website.name'),
                        'disabled'=>'disabled'
                    ]) !!}

                    </div>
                    <div class="form-group">
                        <label>{{trans('website.description')}}</label>
                        {!! Form::text('name', $album->description,[
                        'class'=>'form-control',
                        'placeholder' => trans('website.name'),
                        'disabled' => 'disabled'
                    ]) !!}
                    </div>
                    <div class="form-group">
                        <label>{{trans('website.song')}} {{trans('website.name')}}</label>
                        <div class="list-song">
                            @foreach($album->albumDetails as $albumDetail)   
                                <label>{!! $albumDetail->song->description !!}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group ">
                        <label>{{trans('website.song')}} List</label>
                        <div class="wrap">
                            @foreach ($songs as $song )
                                <div class="check">
                                    {!! Form::checkbox('song_id[]', $song->id) !!}{!! $song->description !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {!! Form::button(trans('website.import'), [
                        'class' => 'btn btn-default',
                        'type' => 'submit',
                    ]) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
