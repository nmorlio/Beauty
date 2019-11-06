<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
        return view ('comments.create');
    }
    public function store(Request $request)
    {
        Comment::create($request->all());
        return redirect(route('profile.show',$request->profile_id));
    }
    public function edit(Comment $comment)
    {
        //
    }
    public function update(Request $request, Comment $comment)
    {
        //
    }
    public function destroy(Comment $comment)
    {
        //
    }
}
