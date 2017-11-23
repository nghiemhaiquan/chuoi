<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable =[
    'content',
    'user_id',
    'target_id',
    'target_type',
  ];

  public function user()
  {
      return $this->belongsTo(User::Class);
  }

  public function commentable()
  {
      return $this->morphTo();
  }
}
