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
                <h1 class="page-header">{{ trans('website.genre') }}
                    <small>{{ trans('website.add') }}</small>
                </h1>
            </div>
            <div class="col-lg-7">

                <form class="post-form-wrapper" action="{{ route('admin.genre.postAdd') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>{{ trans('website.genre') }}</label>
                        <input class="form-control" name="name" placeholder="{{ trans('website.genre') }}" />
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('website.add') }}</button>
                <form>
            </div>
        </div>
    </div>
</div>
@endsection
