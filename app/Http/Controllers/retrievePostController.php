<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class retrievePostController extends Controller
{
    //
    public function retrievePost(){
        $posts = Blog::orderBy('created_at', 'desc')->get();

        return inertia::render('home',['posts' => $posts]);
    }
}
