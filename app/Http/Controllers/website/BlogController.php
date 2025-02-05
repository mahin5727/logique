<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $blogs = Blog::all();
        return view('website.blog.blog', get_defined_vars());
    }

    public function blogdetail($id)
    {
        $blogs = Blog::all();
        $blog = Blog::with(['comments'])->withCount('comments')->findOrFail($id);
        
        return view('website.blog.blog-detail', get_defined_vars());
    }
}
