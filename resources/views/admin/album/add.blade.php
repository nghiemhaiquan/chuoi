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
                <h1 class="page-header">{{ trans('website.album') }}
                    <small>{{ trans('website.add') }}</small>
                </h1>
            </div>
            <div class="col-lg-7">

                <form action="{{ route('admin.album.postAdd') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>{{ trans('website.name') }}</label>
                        <input class="form-control" name="name" placeholder="{{ trans('website.name') }}" value="" />
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.description') }}</label>
                        <textarea id="demo" name="description" class="form-control ckeditor" rows="3" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.image') }}</label>
                        <input type="file" name="image_cover" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('website.add') }}</button>
                <form>
            </div>
        </div>
    </div>
</div>
@endsection
