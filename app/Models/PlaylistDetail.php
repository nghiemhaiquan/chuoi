<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistDetail extends Model
{
    protected $fillable = [
      'playlist_id',
      'song_id',
    ];

    public function playlist()
    {
        return $this->belongsTo(Playlist::Class);
    }

    public function song()
    {
        return $this->belongsTo(Song::Class);
    }
}
