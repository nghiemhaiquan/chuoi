@extends('userpage.master')

@section('singerhot')
<div class="container">
    <div id="singer">
        <div class="row">
            <div class="col-md-3 left">
                <h3><a href="">{{ trans('website.singer') }}</a></h3>
                <ul class="data-list">
                    @foreach ($singers as $singer)
                    <li><a href="{{action('HomeController@showSinger', $singer->id)}}">{{$singer->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 right">
                <h2><a href="">{{ trans('website.singer') }}</a></h2>
                <div>
                    <!-- Nav tabs -->
                    <!-- Tab panes -->
                    <div class="">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="singer-product">
                                    @foreach ($songs as $song)
                                    <div class="col-md-3 product">
                                        <img src="upload/song/{{$song->image_cover}}" alt="Ừ Có Anh Đây (Single) - Tino" class="img-responsive fn-thumb">
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
