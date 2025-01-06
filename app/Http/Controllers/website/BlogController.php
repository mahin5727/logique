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
        return view('website.blog.blog', get_defined_vars());
    }

    public function blogdetail($id)
    {
        $blog = Blog::where('id', $id)->first();
        return view('website.blog.blog-detail', get_defined_vars());
    }
}
