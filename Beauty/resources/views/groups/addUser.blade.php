
<form method='POST' action="/group{{$group->id}}/addUser{{$user->id}}">
@csrf
<p>Añadir integrante: <input type="text" name="$user->name" value=""></p>
<input type="submit" value="Añadir">
</form>