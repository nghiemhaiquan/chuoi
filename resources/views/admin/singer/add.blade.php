@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ trans('website.singer')}}
                    <small>{{ trans('website.add')}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="#" method="POST">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label>{{ trans('website.name')}}</label>
                        <input class="form-control" name="Name" placeholder="{{ trans('website.name')}}" value=""/>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.gender')}}</label>
                        <label class="radio-inline">
                            <input name="Gendre" value="0" type="radio">{{ trans('website.boy')}}
                        </label>
                        <label class="radio-inline">
                            <input name="Gendre" value="1" type="radio">{{ trans('website.girl')}}
                        </label>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.description')}}</label>
                        <textarea id="demo" name="Description" class="form-control ckeditor" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('website.country')}}</label>
                        <input class="form-control" name="Country" placeholder="{{ trans('website.country')}}" value=""/>
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

