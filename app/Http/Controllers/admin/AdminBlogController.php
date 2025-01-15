<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.blogs', get_defined_vars()); 
    }

    public function addblog()
    {
        $categories = Category::all();
        return view('admin.blog.add-blog', get_defined_vars());
    }

    public function editblog($blog_id){
        $blog = Blog::where('id', $blog_id)->first();
        return view('admin.blog.edit-blog', get_defined_vars());
    }

    public function updateblog(Request $request){
        $request->validate([
            'blog_title' => 'required|string|max:255',
            'blog_category' => 'required|string|max:255',
            'blog_description' => 'required|string',
            'blog' => 'required|string',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image
        ]);
        $image_url = null;
    
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension(); 
            $destinationPath = public_path('uploads/blogs');
            $image->move($destinationPath, $image_name); 
            $image_url = 'uploads/blogs/' . $image_name;
        }
    
        Blog::create([
            'title' => $request->blog_title,
            'blog_category' => $request->blog_category,
            'description' => $request->blog_description,
            'blog' => $request->blog,
            'blog_image' => $image_url,
            'tags' => $request->tags
        ]);
    
        return redirect()->route('view-blogs')->with(['success' => 'Blog Has been Updated.']);
       
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
    
        $image_url = null;
    
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension(); 
            $destinationPath = public_path('uploads/blogs');
            $image->move($destinationPath, $image_name); 
            $image_url = 'uploads/blogs/' . $image_name;
        }
    
        Blog::create([
            'title' => $request->blog_title,
            'blog_category' => $request->blog_category,
            'description' => $request->blog_description,
            'blog' => $request->blog,
            'blog_image' => $image_url,
            'tags' => $request->tags
        ]);
    
        return redirect()->route('view-blogs')->with(['success' => 'Blog Has been Uploaded.']);
    }

    public function delblog($id) {
        Blog::where('id', $id)->delete();
        return redirect()->route('view-blogs')->with(['danger' => 'Blog Has been Deleted.']);
    }
    
    
    public function category(){
        $categorys = Category::all();
        return view('admin.category.category', get_defined_vars());
    }

    public function addcategory(){
        return view('admin.category.add-category');
    }

    public function delcategory($id){
        Category::where('id', $id)->delete();
        return redirect()->route('category')->with(['danger' => 'Your Category has been deleted']);
    }

    public function savecategory(Request $request){
        Category::create([
            'category' => $request->category
        ]);

        return redirect()->route('category')->with(['success' => 'Your Category has been added']);
    }

}
