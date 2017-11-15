@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.genre')}}
                    <small>{{ trans('website.list')}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>{{ trans('website.id')}}</th>
                        <th>{{ trans('website.name')}}</th>
                        <th>{{ trans('website.delete')}}</th>
                        <th>{{ trans('website.edit')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td></td>
                        <td></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#">{{ trans('website.delete')}}</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('GenreEdit') }}">{{ trans('website.edit')}}</a></td>
                    </tr> 
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

