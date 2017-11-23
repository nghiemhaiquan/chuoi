<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $fillable = [
      'name',
      'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function playlistDetails(){
        return $this->hasMany(PlaylistDetail::Class);
    }
}
