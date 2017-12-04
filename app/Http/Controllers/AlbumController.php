<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Song;
use App\Models\AlbumDetail;
use App\Http\Requests\AlbumRequest;
use App\Helpers\SetFile;
use Illuminate\Support\Facades\Input;

class AlbumController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
    {
        $albums = Album::all();

        return view('admin.album.list')->with('albums', $albums);
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function create()
    {
        return view('admin.album.add');
    }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function store(AlbumRequest $request)
    {
        $album = Album::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_cover' => SetFile::storingAlbumImage($request),
        ]);

        return redirect()->route('admin.album.list');
    }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function show($id)
    {
        $album = Album::find($id);
        $songs = Song::all();

        return view('admin.album.show', compact('album', 'songs'));
    }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function edit($id)
    {
        $album = Album::find($id);

        return view('admin.album.update')->with('album', $album);
    }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function update(AlbumRequest $request, $id)
    {
        $album = Album::find($id);
        $album->name = $request->name;
        $album->description = $request->description;
        $album->image_cover = SetFile::storingAlbumImage($request);
        $album->save();

        return redirect()->route('admin.album.list');
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();

        return redirect()->route('admin.album.list');
    }

    public function createAlbumDetails(Request $request, $id)
    {
        foreach ($request->input('song_id') as $song_id)
        {
            $albumDetail = AlbumDetail::create([
                'album_id' => $id,
                'song_id' => $song_id,
            ]);
        }
        
        return redirect()->route('admin.album.show', compact('id'));
    }
}
