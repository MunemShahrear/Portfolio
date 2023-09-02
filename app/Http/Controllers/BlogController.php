<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function store(Request $request){
        $blog = new Blog();

        $blog->blog_title = $request->blog_title;
        $blog->blog_link = $request->blog_link;
        $blog->blog_image = $request->blog_image;

       // dd($blog);
       $blog->save();
       return redirect()->route('create.blog');

    }
}
