<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnswerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function edit(User $user,Answer $answer)
    {   return $user->id==$answer->user_id or $user->rol==TRUE;

    }

    public function delete(User $user, Answer $answer)
    {
        return $user->id==$answer->user_id or $user->rol==TRUE;
    }

}
