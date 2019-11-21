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

    public function deleteFromGroup (User $user, Group $group)
    {
        if($user->is_admin==TRUE){
            return true;
        }

        $adminsId = $group->getAdmins()->pluck('id')->toArray();
        if(in_array($user->id, $adminsId)){
            return true;
        }

        return false;

    }
    
    /*public function addToGroup(User $profile, Group $group)
    {
        if ($profile->id == $group->user_id) {
            
            return False;
        } 
        return true;
    }*/
   

}
