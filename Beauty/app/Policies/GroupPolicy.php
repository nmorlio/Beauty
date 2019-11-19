<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Group;


class GroupPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        
    }
    public function edit(User $user, Group $group)
    {
        $adminsId = $group->getAdmins()->pluck('id')->toArray();
        return  in_array($user->id, $adminsId) or $user->is_admin==TRUE;
    }
    public function delete(User $user, Group $group)
    {
        $adminsId = $group->getAdmins()->pluck('id')->toArray();
        return  in_array($user->id, $adminsId) or $user->is_admin==TRUE;
    }

    public function deleteFromGroup (User $user,  Group $group)
    {
        if($user->is_admin==TRUE){
            return true;
        }

        if($user->id===$group->user_id){
            return true;
        }

        return false;

    }
    

}
