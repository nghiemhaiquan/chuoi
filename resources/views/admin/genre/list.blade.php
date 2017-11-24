@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.genre') }}
                    <small>{{ trans('website.list') }}</small>
                </h1>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('website.id') }}</th>
                        <th>{{ trans('website.name') }}</th>
                        <th>{{ trans('website.delete') }}</th>
                        <th>{{ trans('website.edit') }}</th>
                    </tr>
                </thead>
                @foreach ($genres as $genre)
                    <tbody>
                        <tr class="odd gradeX" align="center">
                            <td>{{ $genre->id }}</td>
                            <td>{{ $genre->name }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                {{ Form::open(['route' => ['admin.genre.delete', $genre->id], 'method' => 'POST' ]) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit(trans('website.delete'), ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i><br><a href="{{ route('admin.genre.edit', $genre->id) }}" class="btn btn-primary">{{ trans('website.edit') }}</a></td>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
