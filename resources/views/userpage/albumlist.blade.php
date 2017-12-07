@extends('userpage.master')

@section('albumlist')

<div id="songlist">
	<div class="container">
		<div class="">
			<h3>{{trans('website.list')}}{{trans('website.song')}}</h3>
			<div class="row">
				@foreach($albums as $album)
				<div class="product col-md-2">
					<img src="{{$album->getAlbumPathAttribute()}}">
					<span><a href="">{!!$album->description!!}</a></span>
					<span><a href="">{{$album->name}}</a></span>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection