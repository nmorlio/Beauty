
<form method='POST' action="/profile/{{$user->id}}">
@csrf
@method('patch')
<p>Nombre: <input required type="text" name="name" value="{{$user->name}}"> </p>
<p>Email: <input type="text" name="email" required value="{{$user->email}}"> </p>
<p>Descripción: <input type="text" name="description" value="{{$user->description}}"> </p>
<p>Puesto: <input type="text" name="position" value="{{$user->position}}"> </p>
<input type="submit" value="Enviar">
</form>


