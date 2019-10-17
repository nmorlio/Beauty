<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
       return view('profile/profile',['user'=>$user]);
    }
    public function edit(User $profile)
    {
        return view('profile/profileEdit',['user'=>$profile]);
    }

    public function update(Request $request, User $profile)
    {
        $profile->update($request->all());
        return redirect("profile/$profile->id");
    }
}
