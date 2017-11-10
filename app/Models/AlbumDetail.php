<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumDetail extends Model
{
  use SoftDeletes;

  protected $fillalbe = [
    'album_id',
    'song_id',
  ];

  public function album()
  {
      return $this->belongsTo(Album::Class);
  }

  public function song()
  {
      return $this->belongsTo(Song::Class);
  }
}
