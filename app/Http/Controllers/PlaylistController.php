<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    public function create()
    {

        return view('userpage.playlist.create');
    }

    public function store(Request $request)
    {
        $playlist = Playlist::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
        ]);

        return view('userpage.profile', compact('playlist'));
    }

    public function show($id)
    {
        $playlist = Playlist::find($id);
        $songs = Song::all();

        return view('userpage.playlist.show', compact('playlist', 'songs'));
    }
}
