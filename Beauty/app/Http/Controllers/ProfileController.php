<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function show($id)
    {
       $profile = User::find($id);
       dd($profile);
    }
}
