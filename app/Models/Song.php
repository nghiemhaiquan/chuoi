<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\SongController;
use App\Http\Requests\SongRequest;
use Illuminate\Support\Facades\Input;

class Song extends Model
{
    protected $fillable =[
      'link',
      'image_cover',
      'lyric',
      'description',
      'genre_id',
      'singer_id',
      'rate_point',
      'ishot',
    ];

    public function singer()
    {
        return $this->belongsTo(Singer::Class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::Class);
    }

    public function rates()
    {
        return $this->morphMany(Rate::Class, 'ratetable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::Class, 'commentable');
    }

    public function albumDetails()
    {
        return $this->hasMany(AlbumDetail::Class);
    }

    public function playlistDetails()
    {
        return $this->hasMany(PlaylistDetail::Class);
    }

    public function getSongPathAttribute()
    {
        return asset(config('custom.image_source.song') . $this->attributes['image_cover']);
    }
}
