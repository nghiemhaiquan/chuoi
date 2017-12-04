@extends('userpage.master')

@section('profile')
<!--start main-->
<div id="main">
    <div class="container">
        <div class="">
            <div class="content">
                <div class="row">
                    <!--start main left-->
                    <div class="col-md-3" id="main_left">
                        <div class="image"></div>
                        <p>{{ $user->name }}</p>
                        <a href="#">{{ trans('website.add_friend') }}</a>
                        <button>{{ trans('website.edit_profile') }}</button>
                        <a class="btn btn-primary pull-right" href="{{ action('PlaylistController@create') }}"><p>{{ trans('website.create_playlist') }}</p>
                    </div>
                    <!--end main left-->
                    <!--start main-right-->
                    <div class="col-md-9" id="main_right">
                        <div class="main_right_content">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('website.genre') }}</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('website.singer') }}</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">{{ trans('website.album') }}</a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">{{ trans('website.song') }}</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home"></div>
                                <div role="tabpanel" class="tab-pane" id="profile"></div>
                                <div role="tabpanel" class="tab-pane" id="messages"></div>
                                <div role="tabpanel" class="tab-pane" id="settings"></div>
                            </div>
                        </div>
                    </div>
                    <!--end main right-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end main-->
@endsection
