<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function show(User $user)
    {
       echo "Nombre: $user->name<br>";
       echo "Email: $user->email<br>";
       echo "Descripción: $user->description<br>";
       echo "Puesto: $user->position<br>";
    }
}
