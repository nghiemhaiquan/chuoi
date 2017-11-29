@extends('userpage.master')

@section('song')

<div id="song">
    <div class="container">
        <div class="wrap">
            <div class="row">
                <div class="col-md-8 song-left">
                    <div class="title">
                        <img src="">
                        <div class="">
                            <h1>{{ trans('website.song') }}</h1>
                            <h2>{{ trans('website.singer') }}</h2>
                            <p><span>{{ trans('website.phathanh') }} </span>{{ trans('website.2017') }}</p>
                            <p><span>{{ trans('website.genre') }} </span>{{ trans('website.genre') }}</p>
                        </div>
                    </div>
                    <div class="audio">
                        <audio controls>
                            <source src="" type="">
                        </audio>
                    </div>
                    <div class="description">
                        <label>{{ trans('website.description') }}<span>{{ trans('website.song') }}</span></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="infor-singer">
                        <a href=""><img src=""></a>
                        <div class="artist-info">
                            <h2>{{ trans('website.singer') }}</h2>
                            <span>
                                <i></i>
                                <b></b>
                                <s>{{ trans('website.vote') }}</s>
                            </span>
                        </div>
                        <div class="singer-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                    <div class="singer-album">
                        <h2><a href="">{{ trans('website.album') }}</a></h2>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                        <div class="col-md-3 product">
                            <img src="" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
                            <h3><a href="#">{{ trans('website.album') }}</a></h3>
                            <h4><a href="#">{{ trans('website.singer') }}</a></h4>
                        </div>
                    </div>
                    <div class="comment">
                        <h3>{{ trans('website.comment') }} (<span>0</span>)</h3>
                        <form action method="post">
                            <img src="">
                            <div class="textarea">
                                <textarea cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" name="btn">{{ trans('website.comment') }}</button>
                        </form>
                    </div>
                    <div class="commentlist">
                        <h3>{{ trans('website.comment') }}</h3>
                        <div class="item-comment">
                            <a href=""><img src=""></a>
                            <div class="postcomment">
                                <h4>{{ trans('website.user') }}</h4>
                                <span>{{ trans('website.user') }}</span>
                                <p>{{ trans('website.user') }}</p>
                            </div>
                        </div>
                        <div class="item-comment">
                            <a href=""><img src=""></a>
                            <div class="postcomment">
                                <h4>{{ trans('website.user') }}</h4>
                                <span>{{ trans('website.user') }}</span>
                                <p>{{ trans('website.user') }}</p>
                            </div>
                        </div>
                        <div class="item-comment">
                            <a href=""><img src=""></a>
                            <div class="postcomment">
                                <h4>{{ trans('website.user') }}</h4>
                                <span>{{ trans('website.user') }}</span>
                                <p>{{ trans('website.user') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 song-right">
                    <img src="">
                    <h2>{{ trans('website.user') }}</h2>
                    <div class="listhot">
                        <ul>
                            <li>
                                <a href=""><img src=""></a>
                                <h3><a href="">{{ trans('website.user') }}</a></h3>
                                <h4><a href="">{{ trans('website.user') }}</a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
