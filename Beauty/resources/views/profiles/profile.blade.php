@extends('layouts.app')

@section('content')

@include ('nav')


<?php

    echo "Nombre: $user->name<br>";
    echo "Email: $user->email<br>";
    echo "Descripción: $user->description<br>";
    echo "Puesto: $user->position<br>";
?>
<br>

@can('edit',$profile ?? $user)
    <form method="GET" action="/profile/{{$user->id}}/edit">
        <input type="submit" value="Editar">
    </form>
@endcan


<h3>Grupos a los que pertenece:</h3>

@foreach ($user->groups as $group)
<td>
<br>
{{$group->name}} 
</td>

@can ('deleteFromGroup', $group ?? $user)


<form method="GET" action="/user{{$user->id}}/kick ">
    <input type="submit" value="Sacar del grupo">
</form>

@endcan


@endforeach

<br>


<form method="GET" action="/user{{$user->id}}/addToGroup">
    <input type="submit" value="Añadir a grupo">
</form>



@endsection ()

@section ('botton')

@include('comments.create')
@include('comments.list',['comments'=>$user->comments])

@endsection ()