<?php

namespace App\Http\Controllers\Website;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function savecomment(Request $request, $blog_id){

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'message' => ['required']

        ]);
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'blog_id' => $blog_id
        ]);
        return back()->with(['success' => 'Your comment has been added']);
    }
}
