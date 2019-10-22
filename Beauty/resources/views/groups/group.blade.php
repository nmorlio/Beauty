<?php
echo "Nombre: $group->name<br>";
echo "Descripción: $group->description<br>";
?>
Miembros:
@foreach ($group->users as $user)
<br>
{{$user->name}} 
@endforeach




<form method="GET" action="/group/{{$group->id}}/edit">
<input type="submit" value="Editar">
</form>
<form method="GET" action="/group">
<input type="submit" value="Lista de Grupos">
</form>
<form method="POST" action="/group/{{$group->id}}">
@csrf
@method('delete')
<input type="submit" value="eliminar">
</form>

