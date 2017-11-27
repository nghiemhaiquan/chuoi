@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.album') }}
                    <small>{{ trans('website.list') }}</small>
                </h1>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('website.id') }}</th>
                        <th>{{ trans('website.name') }}</th>
                        <th>{{ trans('website.description') }}</th>
                        <th>{{ trans('website.image_cover') }}</th>
                        <th>{{ trans('website.rate_point') }}</th>
                        <th>{{ trans('website.delete') }}</th>
                        <th>{{ trans('website.edit') }}</th>
                    </tr>
                </thead>
                @foreach($albums as $album)
                    <tbody>
                        <tr class="odd gradeX" align="center">
                            <td>{{ $album->id }}</td>
                            <td>{{ $album->name }}</td>
                            <td>{!! $album->description !!}</td>
                            <td>{{ $album->image_cover }}</td>
                            <td>{{ $album->rate_point }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                {{ Form::open(['route' => ['admin.album.delete', $album->id], 'method' => 'POST' ]) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit(trans('website.delete'), ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i><br><a href="{{ route('admin.album.edit', $album->id) }}" class="btn btn-primary">{{ trans('website.edit') }}</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
