@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.singer') }}
                    <small>{{ trans('website.name') }}</small>
                </h1>
            </div>
            <div class="col-lg-7">

                <form action="{{ route('admin.singer.update', $singer->id) }}" method="POST">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label>{{ trans('website.name') }}</label>
                        <input class="form-control" name="name" placeholder="{{ trans('website.name') }}" value="{{ $singer->name }}"/>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.gender') }}</label>
                        <label class="radio-inline">
                            <input name="gender" value="0" type="radio">{{ trans('website.male') }}
                        </label>
                        <label class="radio-inline">
                            <input name="gender" value="1" type="radio">{{ trans('website.female') }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.description') }}</label>
                        <textarea id="demo" name="description" class="form-control ckeditor" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.country') }}</label>
                        <input class="form-control" name="country" placeholder="{{ trans('website.country') }}" value="{{ $singer->country }}"/>
                    </div>

                    <button type="submit" class="btn btn-default">{{ trans('website.edit')}}</button>
                    <button type="reset" class="btn btn-default">{{ trans('website.reset')}}</button>
                <form>
            </div>
        </div>
    </div>
</div>
@endsection
