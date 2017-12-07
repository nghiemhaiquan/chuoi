<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\RateController;
use App\Models\Song;
use App\Models\Album;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\AlbumDetail;
use App\Models\Playlist;
use App\Models\PlaylistDetail;

class UserSongController extends Controller
{
    use RatePoint;
    public function showSong($id)
    {
        $song = Song::find($id);
        $songs = Song::all();
        $comments = Comment::where('target_id', $id)->where('target_type', 0)->paginate(6);
        return view('userpage.song', compact('song', 'songs', 'comments'));
    }

    public function showAlbum($id)
    {
        $album = Album::find($id);
        $songAlbums = AlbumDetail::where('album_id', $id)->get();
        foreach($songAlbums as $songAlbum){
            $songId = $songAlbum->song_id;
            $songs = Song::where('id', $songId)->get();
        }
        
        $albums = Album::all();
        $comments = Comment::where('target_id', $id)->where('target_type', 1)->paginate(6);
        return view('userpage.album', compact('songs', 'album', 'comments', 'albums'));
    }

    public function indexSong()
    {
        $songs = Song::all();
        return view('userpage.songlist',compact('songs'));
    }

    public function indexAlbum()
    {
        $albums = Album::all();
        return view('userpage.albumlist', compact('albums'));
    }

    public function showPlaylist($id)
    {
        $playlist = Playlist::find($id);
        $songPlaylists = PlaylistDetail::where('playlist_id', $id)->get();
        foreach($songPlaylists as $songPlaylist){
            $songId = $songPlaylist->song_id;
            $songs = Song::where('id', $songId)->get();
        }
        
        $playlists = Playlist::all();
        $comments = Comment::where('target_id', $id)->where('target_type', 1)->paginate(6);
        return view('userpage.playlist', compact('songs', 'playlist', 'comments', 'palylists'));
    }
}
