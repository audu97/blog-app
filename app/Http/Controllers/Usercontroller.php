<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Usercontroller extends Controller
{
    //

    public function addPost(): View{
        return view('add-posts');
    }

}
