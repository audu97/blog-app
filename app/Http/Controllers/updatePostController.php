<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class updatePostController extends Controller
{
    //
    public function updatePost($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect()->route('add-post');
    }
}
