@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.name') }}
                    <small>{{ trans('website.list') }}</small>
                </h1>
            </div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>{{ trans('website.id') }}</th>
                            <th>{{ trans('website.link') }}</th>
                            <th>{{ trans('website.description') }}</th>
                            <th>{{ trans('website.image_cover') }}</th>
                            <th>{{ trans('website.lyric') }}</th>
                            <th>{{ trans('website.genre') }}</th>
                            <th>{{ trans('website.singer') }}</th>
                            <th>{{ trans('website.delete') }}</th>
                            <th>{{ trans('website.edit') }}</th>
                        </tr>
                    </thead>
                    @foreach ($songs as $song)
                        <tbody>
                            <tr class="odd gradeX" align="center">
                                <td>{{ $song->id }}</td>
                                <td>{{ $song->link }}</td>
                                <td>{!! $song->description !!}</td>
                                <td>
                                    <img width="300px" src="" alt="">
                                </td>
                                <td>{!! $song->lyric !!}</td>
                                <td>{{ $song->genre->name }}</td>
                                <td>{{ $song->singer->name }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    {{ Form::open(['route' => ['admin.song.delete', $song->id], 'method' => 'POST' ]) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit(trans('website.delete'), ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
                                </td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.song.edit', $song->id) }}" class="btn btn-primary">{{ trans('website.edit') }}</a></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
        </div>
    </div>
</div>
@endsection
