<?php

namespace App\Policies;

use App\Group;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
    public function edit(User $user, User $profile)
    {
        return $user->id == $profile->id or $user->is_admin == TRUE;
    }

   
}
