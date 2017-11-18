<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $with = ['author', 'categories'];

    protected $withCount = ['comments'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $dates = ['published_at'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /*
    |------------------------------------------------------------------------------------
    | Scope
    |------------------------------------------------------------------------------------
    */
    public function scopeSearch($q, $s)
    {
        $q->where('id', '>', 0);

        foreach (explode(' ', $s) as $key) {
            $q->orWhere('name', 'LIKE' , "%$key%");
            $q->orWhere('excerpt', 'LIKE' , "%$key%");
            $q->orWhere('body', 'LIKE' , "%$key%");
        }
    }
    public function scopeFeatured($q)
    {
        return $q->where('is_featured', 1);
    }
    public function scopePopular($q)
    {
        return $q->orderBy('hits', 'DESC');
    }
}
