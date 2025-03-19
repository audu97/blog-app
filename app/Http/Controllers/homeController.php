<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class homeController extends Controller
{
    //
    public function homePage(): View{
        $posts = Blog::orderBy('created_at', 'desc')->get();

        return view('home', ['posts' => $posts]);
    }

}
