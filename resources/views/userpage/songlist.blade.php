@extends('userpage.master')

@section('songlist')

<div id="songlist">
	<div class="container">
		<div class="">
			<h3>{{trans('website.list')}}{{trans('website.song')}}</h3>
			<div class="row">
				@foreach($songs as $song)
				<div class="product col-md-2">
					<img src="{{$song->getSongPathAttribute()}}">
					<span><a href="{{action('UserSongController@showSong',$song->id)}}">{!!$song->description!!}</a></span>
					<span><a href="{{action('HomeController@showSinger',$song->singer->id)}}">{{$song->singer->name}}</a></span>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection
