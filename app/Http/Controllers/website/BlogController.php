<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $techblogs = Blog::where('blog_category', 'Technology')->get();
        $astroblogs = Blog::where('blog_category', 'Astrology')->get();
        return view('website.blog.blog', get_defined_vars());
    }

    public function blogdetail($id)
    {
        $blogs = Blog::all();
        $blog = Blog::where('id', $id)->first();
        return view('website.blog.blog-detail', get_defined_vars());
    }
}
