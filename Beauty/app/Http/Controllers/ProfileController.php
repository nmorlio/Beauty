<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
       return view('profile/profile',['user'=>$user]);
    }
    public function edit(User $user)
    {
        return view('profile/profileEdit',['user'=>$user]);
    }
}
