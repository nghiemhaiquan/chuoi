@extends('userpage.master')

@section('album')
<script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
<div id="album">
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
                    @if(!isset($songs))
                    <p>no song</p>
                    @else
                    <div class="audio">
                        <div class="audio-cover">
                            <div class="plyr-1">
                                <audio autoplay="" controls class="test-p" id='audio-view'>
                                    <source src="{{ $songs[0]->link }}" type="audio/mpeg">
                                    {{ trans('song.brower_not_support') }}
                                </audio>
                            </div>
                        </div>
                        <div class="table">
                            <ul class="list-album">
                                <li>
                                    <ul>
                                    @foreach ($songs as $key => $song )
                                        @if ($songs == $song[0])
                                        <li><a href="#" class="play-audio album-active" >{{ $song->link }}</a></li>
                                        @else
                                        <li><a href="#" class="play-audio"  >{{ $song->link }}</a></li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
    $('#audio-view').on('ended', function(){
        var id=$('.album-active').attr('id');
        id++;
        if(id==$('.list-album li a').length){
            id=0;
        }
        $('#'+id).click();
        document.getElementById('audio-view').play();
    });
    $('.play-audio').each(function(index){
        $(this).attr('id',index)
    })
    $('.list-album li a').on('click',function(){
        var id=$('source').attr('src',$(this).html());
        $('.list-album li a').removeClass('album-active');
        $(this).addClass('album-active');
        document.getElementById('audio-view').load();
        return false;
    })
});
</script>
@endsection
