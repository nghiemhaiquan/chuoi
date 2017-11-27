@extends('userpage.master')

@section('singerhot')
<div class="container">
    <div id="singer">
        <div class="row">
            <div class="col-md-3 left">
                <h3><a href="">{{ trans('website.singer') }}</a></h3>
                <ul class="data-list">
                    <li><a href="#">{{ trans('website.Link') }}</a>
                        <ul>
                            <li><a href="#">{{ trans('website.Link') }}</a>
                            <li><a href="#">{{ trans('website.Link') }}</a>
                            <li><a href="#">{{ trans('website.Link') }}</a>
                            <li><a href="#">{{ trans('website.Link') }}</a>
                            <li><a href="#">{{ trans('website.Link') }}</a>    
                        </ul>
                    </li>
                    <li><a href="#">{{ trans('website.Link') }}</a>
                        <ul>
                            <li><a href="#">{{ trans('website.Link') }}</a>
                            <li><a href="#">{{ trans('website.Link') }}</a>
                            <li><a href="#">{{ trans('website.Link') }}</a>
                            <li><a href="#">{{ trans('website.Link') }}</a>    
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 right">
                <h2><a href="">{{ trans('website.singer') }}</a></h2>
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('website.Link') }}</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('website.Link') }}</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">{{ trans('website.Link') }}</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">{{ trans('website.Link') }}</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="singer-product">
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                    <div class="col-md-3 product">
                                        <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/0/4/047305f465f0aa64c22ed49787b02548_1510199251.jpg" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{ trans('website.album') }}</a></h3>
                                        <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">...</div>
                            <div role="tabpanel" class="tab-pane" id="messages">...</div>
                            <div role="tabpanel" class="tab-pane" id="settings">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
