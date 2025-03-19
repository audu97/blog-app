<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubmitPostController extends Controller
{
    //
    public function show(): \Inertia\Response
    {
        return Inertia::render('SubmitPost');
    }

    public function submitPost(request $request, Blog $blog): RedirectResponse
    {
//        $blog = new Blog;
//        $blog->title =  $request->string('title');
//        $blog->content = $request->string('content');
//
//        $blog->save();
        Blog::create([
            'title' => $request->string('title'),
            'content' => $request->string('content'),
        ]);

        return redirect()->route('home');
    }
}
