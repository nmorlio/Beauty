<form method="GET" action="/main">
<input type="submit" value="Página principal">
</form>

<form method="GET" action="/group">
<input type="submit" value="Lista de Grupos">
</form>

<?php
echo "Nombre: $group->name<br>";
echo "Descripción: $group->description<br>";
?>
<tr>
Miembros:
@foreach ($group->users as $user)
<td>
{{$user->name}}/
</td>
@endforeach
</tr>

@if (Auth::user()->id == $group->user_id)
<form method="GET" action="/group/{{$group->id}}/edit">
<input type="submit" value="Editar">
</form>
<form method="POST" action="/group/{{$group->id}}">
@csrf
@method('delete')
<input type="submit" value="eliminar">
</form>
@endif
