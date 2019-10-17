<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
       return view('profiles/profile',['user'=>$user]);
    }
    public function edit(User $profile)
    {
        return view('profiles/edit',['user'=>$profile]);
    }

    public function update(Request $request, User $profile)
    {
        $profile->update($request->all());
        return redirect("profile/$profile->id");
    }
}