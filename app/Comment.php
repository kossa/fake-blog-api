<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
