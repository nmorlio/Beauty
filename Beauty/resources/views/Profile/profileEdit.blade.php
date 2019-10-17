
<form method='POST' action="/profile/{{$user->id}}">
@csrf
@method('patch')
<p>Nombre: <input type="text" name="name" value="<?php echo $user->name?>"> </p>
<p>Email: <input type="text" name="email"> </p>
<p>Descripción: <input type="text" name="description"> </p>
<p>Puesto: <input type="text" name="position"> </p>
<input type="submit" value="Enviar">
</form>


