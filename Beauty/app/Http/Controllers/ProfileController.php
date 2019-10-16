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
    /*tambien se puede escribir mas estilo laravel

    show ($user)
    $profile = User::find ($user)  (cambiar rutas)
    dd ($user) */
}
