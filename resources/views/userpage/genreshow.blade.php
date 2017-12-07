@extends('userpage.master')

@section('song')
    <div class="col-lg-12">
        <h3 class="page-header">{{ $genre->name }}</h3>
    </div>
    @foreach ($songs as $song)
    <div class="col-sm-3 list">
        <a href="{{action('HomeController@showGenre', $song->id)}}">
          <p>{!! $song->description !!}</p>
        </a>
    </div>
    @endforeach
@endsection
