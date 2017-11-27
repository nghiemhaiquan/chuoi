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

                <form action="{{ route('admin.genre.update', $genre->id) }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>{{ trans('website.name') }}</label>
                        <input class="form-control" name="name" placeholder="{{ trans('website.name') }}" value="{{ $genre->name }}" >
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('website.edit') }}</button>
                <form>
            </div>
        </div>
    </div>
</div>
@endsection
