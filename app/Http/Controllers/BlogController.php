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
    public function updateb(Request $request,$id)
        {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'blog_title' => 'nullable',
                'blog_link' => 'nullable',
                'blog_image' => 'nullable',
               
            ]);

            // Retrieve the existing profile
            // $blog = Blog::find($blog);
            $blog = Blog::find($id);

            // Update the profile fields only if they have changed
           // $profile->name = $validatedData['name'];
            if (isset($validatedData['blog_title'])) {
                $blog->blog_title = $validatedData['blog_title'];
            }
            if (isset($validatedData['blog_link'])) {
                $blog->blog_link = $validatedData['blog_link'];
            }
            if (isset($validatedData['blog_image'])) {
                $blog->blog_image = $validatedData['blog_image'];
            }
           
            if ($request->hasFile('blog_image')) {
                $image = $request->file('blog_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName); // Store the image in the 'uploads' directory
                // You can also save the image details to a database if needed
                // return 'Image uploaded successfully';
                $blog->blog_image = $imageName;
            }
           
    
        
            $blog->save();

            // Redirect back to the profile edit page with a success message
           return redirect()->route('all.blog')->with('success', 'Blog updated successfully.');
        }

        public function destroy($id)
            {
                $item = blog::find($id);

                if (!$item) {
                    // Handle the case where the item is not found
                    return redirect()->route('all.blog')->with('error', 'Item not found.');
                }

                $item->delete();

                // Redirect back with a success message
                return redirect()->route('all.blog')->with('success', 'Item deleted successfully.');
            }

}


