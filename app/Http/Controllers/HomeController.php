<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Song;
use App\Models\Singer;
use App\Models\Genre;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        $albums = Album::all();

        return view('userpage.homepage', compact('songs', 'albums'));
    }

    public function indexGenre()
    {
        $genres = Genre::all();
        $songs = Song::all();

        return view('userpage.genrelist', compact('genres','songs'));
    }

    public function indexSinger()
    {
        $singers = Singer::all();
        $songs = Song::all();

        return view('userpage.singer', compact('singers','songs'));
    }

    public function indexAlbum()
    {
        $albums = Album::all();
        $songs = Song::all();

        return view('userpage.genrelist', compact('albums','songs'));
    }

    public function indexSong()
    {
        $songs = Song::all();
        return view('userpage.songlist', compact('songs'));
    }

    public function showGenre($id)
    {
        $genres = Genre::all();
        $genre = Genre::find($id);
        $songs = Song::where('genre_id', $id)->paginate(6);
        return view('userpage.genrelist', compact('songs','genre','genres'));
    }

    public function showSinger($id)
    {
        $singers = Singer::all();
        $singer = Singer::find($id);
        $songs = Song::where('singer_id', $id)->paginate(6);
        return view('userpage.singer', compact('songs','singer','singers'));
    }
}
