<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class deletePostController extends Controller
{
    //

    public function deletePost($id, Blog $blog)
    {

        Blog::destroy($id);
        return redirect()->route('home');
    }
}
