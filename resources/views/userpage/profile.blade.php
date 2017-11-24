@extends('userpage.master')

@section('profile')
<!--start main-->
<div id="main">
    <div class="container">
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <!--start main left-->
                    <div class="col-md-3" id="main_left">
                        <div class="image"></div>
                        <p>Ten dai dien</p>
                        <a href="#">Add Friend</a>
                        <button>Edit proflie</button>
                        <p><i class="fa fa-clock-o"></i>ngay thang nam</p>
                    </div>
                    <!--end main left-->
                    <!--start main-right-->
                    <div class="col-md-9" id="main_right">
                        <div class="main_right_content">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Genre</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Singer</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Album</a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Song</a></li>
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
