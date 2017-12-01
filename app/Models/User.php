<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const IS_ADMIN = 1;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'enabled',
        'facebook_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function rates()
    {
        return $this->hasMany(Rate::Class);
    }

    public function playlists()
    {
        return $this->hasMany(Playlist::Class);
    }

    public function isAdmin()
    {
        return $this->role == User::IS_ADMIN;
    }
}
