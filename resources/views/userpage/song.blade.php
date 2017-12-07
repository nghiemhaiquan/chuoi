@extends('userpage.master')

@section('song')

<div id="song">
    <div class="container">
        <div class="wrap">
            <div class="row">
                <div class="col-md-8 song-left">
                    <div class="title">
                        <img src="{{ $song->getSongPathAttribute() }}">
                        <div class="">
                            <h1>{!! $song->description !!}</h1>
                            <h2>{{ $song->singer->name }}</h2>
                            <p><span>{{ trans('website.genre') }} </span>{{ $song->genre->name }}</p>
                        </div>
                    </div>
                    <div class="audio">
                        <audio controls>
                            <source src="{{ $song->link }}" type="">
                        </audio>
                    </div>
                    <div class="description">
                        <label>{{ trans('website.lyric') }}</label>
                        <p>{!! $song->lyric !!}</p>
                    </div>
                    <div class="infor-singer">
                        <a href=""><img src="https://zmp3-photo.zadn.vn/thumb/240_240/avatars/6/8/68bcf97b41cd37e918cdf2dc0b85e895_1509438182.jpg"></a>
                        <div class="artist-info">
                            <h2>{{ $song->singer->name }}</h2>
                            <span>
                                <i></i>
                                <b></b>
                                <s>{{ trans('website.vote') }}</s>
                            </span>
                        </div>
                        <div class="singer-description">
                            {{ $song->singer->description }}
                            <p>{{ $song->singer->country }}</p>
                        </div>
                    </div>
                    <div class="singer-song">
                        <h2><a href="">{{ trans('website.song') }}</a></h2>
                        @foreach( $songs as $song )
                        <div class="col-md-3 product">
                            <img src="{{ $song->getSongPathAttribute() }}" alt="">
                            <h3><a href="#">{{ $song->description }}</a></h3>
                            <h4><a href="#">{{ $song->singer->name }}</a></h4>
                        </div>
                        @endforeach
                    </div>
                    <div class="comment">
                        <h3>{{trans('comment')}}</h3>
                        <div class="target_id" data-target-id="{{ $song->id }}"></div>
                        @if (auth()->check())
                        <div class="user_id" data-user-id="{{ Auth::user()->id }}"></div>
                        @else <p>You haven't login yet!</p>
                        @endif
                        @include('userpage.comment')
                    </div>
                </div>
                <div class="col-md-4 song-right">
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
