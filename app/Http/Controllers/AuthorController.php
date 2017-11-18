<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    /**
     * Get list of author
     * 
     * @param LengthAwarePaginator
     */
    public function index()
    {
        return User::paginate(20);
    }

    /**
     * Get an author
     * 
     * @param  int  $id
     * @return App\User
     */
    public function show($id)
    {
        return User::author()->where('id', $id)->firstOrFail();
    }

    /**
     * Get posts of an author
     * 
     * @param  int  $id
     * @return App\Post
     */
    public function posts($id)
    {
        $user = User::author()->where('id', $id)->firstOrFail();
        return $user->posts()->paginate(20);
    }

}
