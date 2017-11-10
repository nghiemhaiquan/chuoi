<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = [
      'name',
      'gender',
      'country',
      'description',
    ];

    public function songs()
    {
        return $this->hasMany(Song::Class);
    }
}
