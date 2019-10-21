<?php
echo "Nombre: $user->name<br>";
echo "Email: $user->email<br>";
echo "Descripción: $user->description<br>";
echo "Puesto: $user->position<br>";
?>
<form method="GET" action="/profile/{{$user->id}}/edit">
<input type="submit" value="Editar">
</form>
<form method="GET" action="/profile">
<input type="submit" value="Lista de Usuarios">
</form>