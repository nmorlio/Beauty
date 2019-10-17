<?php
echo "Nombre: $group->name<br>";
echo "Descripción: $group->description<br>";

?>

<form method="GET" action="/group/{{$group->id}}/edit">
<input type="submit" value="Editar">
</form>