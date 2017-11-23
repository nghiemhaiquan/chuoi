<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    public function songs()
    {
        return $this->hasMany(Song::Class);
    }
}
