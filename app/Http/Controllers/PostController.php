<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    /**
     * Retriece all posts with pagination
     */
    public function index()
    {
        $q = trim(request('q', null));

        if ($q) {
            return Post::search($q)->paginate(20);
        }

        return Post::paginate(20);
    }

    /**
     * featured posts
     */
    public function featured()
    {
        return Post::featured()->paginate(20);
    }

    /**
     * popular posts
     */
    public function popular()
    {
        return Post::popular()->paginate(20);
    }

    /**
     * Get one article
     * 
     * @param  int  $post
     * @return App\Post
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Get comments of given Post
     * 
     * @param  int  $post
     * @return collection
     */
    public function comments(Post $post)
    {
        return $post->comments()->paginate(30);
    }

    /**
     * Get author of given Post
     * 
     * @param  int  $post
     * @return collection
     */
    public function author(Post $post)
    {
        return $post->author;
    }

}
