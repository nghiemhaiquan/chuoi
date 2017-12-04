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
                                    <img src="{{ config('custom.slide.test-1') }}" alt="">
                                    <div class="carousel-caption">

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ config('custom.slide.test-1') }}" alt="...">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ config('custom.slide.test-1') }}" alt="...">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="song">
                            <h2>{{ trans('website.song') }}</h2>
                            @foreach ($songs as $song)
                                <div class="col-md-3 product">
                                    <a href="{{ action('UserSongController@showSong', $song->id) }}">
                                        <img src="{{ $song->getSongPathAttribute() }}" alt="" class="">
                                        <p>{{ $song->name }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="album">
                            <h2>{{ trans('website.album') }}</h2>
                            @foreach ($albums as $album)
                                <div class="col-md-3 product">
                                    <a href="">
                                        <img src="{{ $album->getAlbumPathAttribute() }}" alt="" class="">
                                        <p>{{ $album->name }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 main_right">
                    <div class="sidebar">
                        <img src="{{ config('custom.slide.test-2') }}" class="img-responsive" alt="">
                        <img src="{{ config('custom.slide.test-2') }}" class="img-responsive" alt="">
                        <img src="{{ config('custom.slide.test-2') }}" class="img-responsive" alt="">
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
                <img src="{{ config('custom.slide.test-2') }}" alt="Universal">
                <img src="{{ config('custom.slide.test-2') }}" alt="Universal">
                <img src="{{ config('custom.slide.test-2') }}" alt="Universal">
                <img src="{{ config('custom.slide.test-1') }}" alt="Universal">
                <img src="{{ config('custom.slide.test-1') }}" alt="Universal">
                <img src="{{ config('custom.slide.test-1') }}" alt="Universal">
            </div>
        </div>
    </div>
</div>

@endsection
