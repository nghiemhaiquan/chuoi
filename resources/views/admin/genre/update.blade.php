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
                {!! Form::open([
                    'action' => ['GenreController@update', $genre->id],
                    'method' => 'PUT',
                ]) !!}
                <div class="form-group">
                    {!! Form::text('name', $genre->name,[
                        'class'=>'form-control',
                        'placeholder'=>trans('website.name'),
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
