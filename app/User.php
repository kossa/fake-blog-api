<?php

namespace App;

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
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    |------------------------------------------------------------------------------------
    | SCopes
    |------------------------------------------------------------------------------------
    */
    public function scopeAuthors($q)
    {
        return $q->where('role', 10);
    }   
    public function scopeVisitors($q)
    {
        return $q->where('role', 0);
    }   
}
