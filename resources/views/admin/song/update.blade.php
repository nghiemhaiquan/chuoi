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

                <form action="{{ route('admin.song.update', $song->id) }}" method="POST" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>{{ trans('website.link') }}</label>
                        <input type="text" name="link" class="form-control" value="{{ $song->link }}">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.description') }}</label>
                        <textarea id="demo" name="description" class="form-control ckeditor" rows="3">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.image_cover') }}</label>
                        <p><img src=""></p>
                        <input type="file" name="image_cover" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.lyric') }}</label>
                        <textarea id="demo" name="lyric" class="form-control ckeditor" rows="3">
                        </textarea>
                    </div>
                    <div>
                        <select name="genre_id">
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select name="singer_id">
                            @foreach ($singers as $singer)
                                <option value="{{ $singer->id }}">{{ $singer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('website.edit')}}</button>
                <form>
            </div>
        </div>
    </div>
</div>
@endsection
