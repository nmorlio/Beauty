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
        return redirect(route('profile.show',$request->user_id));
        // cambiar user_id por profile_id
    }
    public function edit(Comment $comment)
    {
        return view('comments.edit',['comment'=>$comment]);
    }
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        return redirect(route('profile.show',$request->user_id));
    }
    public function destroy(Comment $comment)
    {
        //
    }
}
