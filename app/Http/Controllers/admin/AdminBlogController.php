<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.blogs'); 
    }

    public function addblog()
    {
        return view('admin.blog.add-blog');
    }

    public function saveblog(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'blog_category' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'blog' => 'required|string',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image
        ]);

        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image'); // Get the uploaded file
            $image_name = time() . '.' . $image->getClientOriginalExtension(); // Generate a unique name
            $image_url = 'storage/' . $image->storeAs('uploads/blogs', $image_name, 'public');
        } else {
            $image_url = null; 
        }

        Blog::create([
            'title' => $request->blog_title,
            'blog_category' => $request->blog_category,
            'description' => $request->blog_description,
            'blog' => $request->blog,
            'blog_image' => $image_url,
            'tags' => $request->tags
        ]);
        return back()->with(['success' => 'Blog Has been Uploaded.']);
    }
    
}
