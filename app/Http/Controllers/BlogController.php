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
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName); // Store the image in the 'uploads' directory
            // You can also save the image details to a database if needed
            // return 'Image uploaded successfully';
            $blog->blog_image = $imageName;
        }

        // return 'No image selected.';
       // dd($blog);
       $blog->save();
       return redirect()->route('create.blog');

    }

}


