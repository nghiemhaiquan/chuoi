<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $fillable = [
    'name',
    'description',
    'image_cover',
    'rate_point',
  ];

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
}
