@extends('userpage.master')

@section('homepage')

<div id="homepage">
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-8 main_left">
                    <div class="slider">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="https://zmp3-photo.zadn.vn/banner/9/5/95de47057c51fc093e9763f83c177940_1510310771.jpg" alt="">
                                    <div class="carousel-caption">
                                    
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://zmp3-photo.zadn.vn/banner/9/5/95de47057c51fc093e9763f83c177940_1510310771.jpg" alt="...">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://zmp3-photo.zadn.vn/banner/9/5/95de47057c51fc093e9763f83c177940_1510310771.jpg" alt="...">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="song">
                            <h2>{{ trans('website.song') }}</h2>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.song') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                        </div>
                        <div class="album">
                            <h2>{{ trans('website.album') }}</h2>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.album') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.album') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.album') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.album') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.album') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                            <div class="col-md-3 product">
                                <img src="https://zmp3-photo.zadn.vn/thumb/240_240/covers/c/e/ce4ac876e42f82e8ce29bece5c2f703b_1509074377.jpg" alt="" class="">
                                <p>{{ trans('website.album') }}</p>
                                <p>{{ trans('website.singer') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 main_right">
                    <div class="sidebar">
                        <img src="https://zmp3-photo.zadn.vn/covers/e/7/e776fa76156c50e4793a82a52b9d5dd6_1499827947.jpg" class="img-responsive" alt="">
                        <img src="https://zmp3-photo.zadn.vn/covers/1/e/1e8a106b249567119009a8149e1b77ff_1499827613.jpg" class="img-responsive" alt="">
                        <img src="https://zmp3-photo.zadn.vn/covers/4/1/41338edebf610de7a683e3dab33f8b1a_1499827990.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="Hotlist">
                        <div class="hit_song">
                            <h2>{{ trans('website.bxh') }}</h2>
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('website.Link') }}</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('website.Link') }}</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">{{ trans('website.Link') }}</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="group">
                                            <span>01</span>
                                            <h3><a href="">{{ trans('website.song') }}</a></h3>
                                            <h4><a href="">{{ trans('website.singer') }}</a></h4>
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="group">
                                            <span>01</span>
                                            <h3><a href="">{{ trans('website.song') }}</a></h3>
                                            <h4><a href="">{{ trans('website.singer') }}</a></h4>
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="group">
                                            <span>01</span>
                                            <h3><a href="">{{ trans('website.song') }}</a></h3>
                                            <h4><a href="">{{ trans('website.singer') }}</a></h4>
                                            <div class="stars">
                                                <form action="">
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="company">
                <img src="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/images/doi-tac/universal.jpeg" alt="Universal">
                <img src="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/images/doi-tac/universal.jpeg" alt="Universal">
                <img src="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/images/doi-tac/universal.jpeg" alt="Universal">
                <img src="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/images/doi-tac/universal.jpeg" alt="Universal">
                <img src="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/images/doi-tac/universal.jpeg" alt="Universal">
                <img src="https://zmp3-static.zadn.vn/skins/zmp3-v5.1/images/doi-tac/universal.jpeg" alt="Universal">
            </div>
        </div>
    </div>
</div>

@endsection
