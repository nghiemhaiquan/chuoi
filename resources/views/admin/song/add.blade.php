@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.song')}}
                    <small>{{ trans('website.add')}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">


                <form action="#" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label>{{ trans('website.link')}}</label>
                        <input class="form-control" name="Link" placeholder="{{ trans('website.link')}}" />
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.description')}}</label>
                        <textarea id="demo" name="Description" class="form-control ckeditor" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.image_cover')}}</label>
                        <input type="file" name="Image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.lyric')}}</label>
                        <textarea id="demo" name="Lyric" class="form-control ckeditor" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('website.add')}}</button>
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

