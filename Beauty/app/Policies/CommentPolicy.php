<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Comment;

class CommentPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
    public function edit(User $user, Comment $comment)
    {
        return $user->id==$comment->profile_id or $user->is_admin==TRUE;
    }
    //TODO: cambiar profile_id por user_id
    public function delete(User $user, Comment $comment)
    {
        return $user->id==$comment->profile_id or $user->is_admin==TRUE;
    }
}