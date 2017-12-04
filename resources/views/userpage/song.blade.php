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
                            <h1>{!! $song->description !!}</h1>
                            <h2>{{ $song->singer->name }}</h2>
                            <p><span>{{ trans('website.genre') }} </span>{{ $song->genre->name }}</p>
                        </div>
                    </div>
                    <div class="audio">
                        <audio controls>
                            <source src="" type="">
                        </audio>
                    </div>
                    <div class="description">
                        <label>{{ trans('website.lyric') }}</label>
                        <p>{!! $song->lyric !!}</p>
                    </div>
                    <div class="infor-singer">
                        <div class="artist-info">
                            <h2>{{ trans('website.singer') }}</h2>
                            <p>{{ $song->singer->name }}</p>
                        </div>
                        <div class="singer-description">
                            <h3>{{ trans('website.description') }}</h3>
                            <p>{{ $song->singer->description }}</p>
                        </div>
                        <div>
                            <h3>{{ trans('website.country') }}</h3>
                            <p>{{ $song->singer->country }}</p>
                        </div>
                    </div>
                    <div class="singer-album">
                      @foreach( $albums as $album )
                        <h2><a href="">{{ trans('website.album') }}</a></h2>
                        <div class="col-md-3 product">
                            <img src="config('custom.image_source.album').$album->image_cover" alt="">
                            <h3><a href="#">{{ $album->name }}</a></h3>
                            <h4><a href="#">{{ $song->singer->name }}</a></h4>
                        </div>
                      @endforeach
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
