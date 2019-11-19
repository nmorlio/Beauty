@extends('layouts.app')

@section ('content')

@include ('nav')

<form method="GET" action="/group">
<input type="submit" value="Lista de Grupos">
</form>

<?php
echo "Nombre: $group->name<br>";
echo "Descripción: $group->description<br>";
?>
<tr>
    <br>
Miembros:
<br>
@foreach ($group->users as $user)
<td>
<br>
{{$user->name}} 
</td>
@endforeach
</tr>

@can('edit',$group)
<form method="GET" action="/group/{{$group->id}}/edit">
<input type="submit" value="Editar">
</form>
@endcan
@can('delete',$group)
<form method="POST" action="/group/{{$group->id}}">
@csrf
@method('delete')
<input type="submit" value="eliminar">
</form>
@endcan

@endsection