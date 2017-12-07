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
                {!! Form::open([
                    'action' => ['SingerController@update', $singer->id],
                    'method' => 'PUT',
                ]) !!}
                <div class="form-group">
                    <label>{{ trans('website.name') }}</label>
                    {!! Form::text('name', $singer->name,[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.gender') }}</label>
                    {!! Form::select('gender', ['1' => 'Male', '0' => 'Female'],[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.description') }}</label>
                    {!! Form::textarea('description', $singer->description,[
                        'class'=>'form-control'
                    ]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('website.country') }}</label>
                    {!! Form::text('country', $singer->country,[
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
