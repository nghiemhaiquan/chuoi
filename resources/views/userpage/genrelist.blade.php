@extends('userpage.master')

@section('albumhot')
<div class="container">
    <div id="albumhot">
        <div class="row">
            <div class="col-md-3 left">
                <h3><a href="">{{ trans('website.genre') }}</a></h3>
                <ul class="data-list">
                    @foreach ($genres as $genre)
                    <li><a href="{{action('HomeController@showGenre', $genre->id)}}">{!! $genre->name !!}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 right">
                <h2><a href="">{{ trans('website.ten_album') }}</a></h2>
                <div>
                <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <div class="">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="album-product">
                                    @foreach($songs as $song)
                                    <div class="col-md-3 product">
                                        <img src="upload/song/{{$song->image_cover}}" alt="" class="img-responsive fn-thumb">
                                        <h3><a href="#">{{$song->description}}</a></h3>
                                        <h4><a href="#">{{$song->singer->name}}</a></h4>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">...</div>
                            <div role="tabpanel" class="tab-pane" id="messages">...</div>
                            <div role="tabpanel" class="tab-pane" id="settings">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
