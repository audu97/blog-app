<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class viewPostController extends Controller
{
    //
    public function viewSinglePost($id,)
    {
        $post = Blog::findOrFail($id);

        return view('viewPost', ['post' => $post]);

    }
}
