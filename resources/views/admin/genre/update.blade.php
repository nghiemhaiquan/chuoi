@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.genre')}}
                    <small>{{ trans('website.name')}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                
                <form action="#" method="POST">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label>{{ trans('website.name')}}</label>
                        <input class="form-control" name="Ten" placeholder="{{ trans('website.name')}}" value="" >
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('website.edit')}}</button>
                    <button type="reset" class="btn btn-default">{{ trans('website.reset')}}</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

