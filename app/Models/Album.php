<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AlbumRequest;

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

  public function getAlbumPathAttribute()
  {
      return asset(config('custom.image_source.album') . $this->attributes['image_cover']);
  }
}
