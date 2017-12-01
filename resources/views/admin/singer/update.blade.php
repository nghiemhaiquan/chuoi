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
                    {!! Form::text('name', $singer->name) !!}
                    {!! Form::select('gender', ['1' => 'Male', '0' => 'Female']) !!}
                    {!! Form::textarea('description', $singer->description) !!}
                    {!! Form::text('country', $singer->country) !!}
                    {!! Form::button(trans('website.update'), [
                        'class' => 'btn btn-block btn-success btn-xs',
                        'type' => 'submit',
                    ]) !!}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
