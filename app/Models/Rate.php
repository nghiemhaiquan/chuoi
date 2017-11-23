<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
  protected $fillable =[
    'point',
    'user_id',
    'target_id',
    'target_type',
  ];

  public function user()
  {
      return $this->belongsTo(User::Class);
  }

  public function ratetable()
  {
      return $this->morphTo();
  }
}
