@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.singer') }}
                    <small>{{ trans('website.list') }}</small>
                </h1>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('website.id') }}</th>
                        <th>{{ trans('website.name') }}</th>
                        <th>{{ trans('website.genre') }}</th>
                        <th>{{ trans('website.description') }}</th>
                        <th>{{ trans('website.country') }}</th>
                        <th>{{ trans('website.delete') }}</th>
                        <th>{{ trans('website.edit') }}</th>
                    </tr>
                </thead>
                @foreach ($singers as $singer)
                    <tbody>
                        <tr class="odd gradeX" align="center">
                            <td>{{ $singer->id }}</td>
                            <td>{{ $singer->name }}</td>
                            @if ($singer->gender == config('custom.gender.male'))
                                <td>{{ trans('website.male') }}</td>
                            @else
                                <td>{{ trans('website.female') }}</td>
                            @endif
                            <td>{{ $singer->description }}</td>
                            <td>{{ $singer->country }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                {{ Form::open(['route' => ['admin.singer.delete', $singer->id], 'method' => 'POST' ]) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit(trans('website.delete'), ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i><br><a href="{{ route('admin.singer.edit', $singer->id) }}" class="btn btn-primary">{{ trans('website.edit') }}</a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
