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
                    <div class="form-group">
                        <label>{{ $album->name }}</label>
                    </div>
                    <div class="form-group">
                        <label>{{ $album->description }}</label>
                    </div>
                    @foreach($album->albumDetails as $albumDetail)
                        <div class="form-group">
                            <label>{!! $albumDetail->song->description !!}</label>
                        </div>
                    @endforeach
                    {!! Form::open([
                        'action' => ['AlbumController@createAlbumDetails', $album->id],
                        'method' => 'PUT',
                    ]) !!}
                    @foreach ($songs as $song )
                        <tr>
                            <td><div class="pull-right">
                                {!! Form::checkbox('song_id[]', $song->id) !!}{!! $song->description !!}
                            </div></td>
                        </tr>
                    @endforeach
                    {!! Form::button(trans('website.import'), [
                        'class' => 'btn btn-block btn-success btn-xs',
                        'type' => 'submit',
                    ]) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
