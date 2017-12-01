<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;
use App\Models\Genre;
use App\Http\Requests\SongRequest;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::with('genre', 'singer')->get();

        return view('admin.song.list')->with('songs', $songs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $singers = Singer::all();

        return view('admin.song.add', compact('genres', 'singers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongRequest $request)
    {
        $song = Song::create([
            'link' => $request->link,
            'image_cover' => $request->image_cover,
            'description' => $request->description,
            'lyric' => $request->lyric,
            'genre_id' => $request->genre_id,
            'singer_id' => $request->singer_id,
        ]);

        $song->save();

        return redirect()->route('admin.song.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Song::find($id);
        $genres = Genre::pluck('name', 'id');
        $singers = Singer::pluck('name', 'id');

        return view('admin.song.update', compact('genres', 'singers', 'song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SongRequest $request, $id)
    {
        $song = Song::find($id);
        $song->link = $request->link;
        $song->description = $request->description;
        $song->image_cover = $request->image_cover;
        $song->lyric = $request->lyric;
        $song->genre_id = $request->genre_id;
        $song->singer_id = $request->singer_id;
        $song->save();

        return redirect()->route('admin.song.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Song::find($id);
        $song->delete();

        return redirect()->route('admin.song.list');
    }
}
