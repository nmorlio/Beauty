<form method="GET" action="/profile/{{$user->id}}">
    <input type="submit" value="Volver">
</form>

<form method="POST" action="/user{{$user->id}}/detachGroup">
@csrf 
@method('delete')
<select name="group_id">
    @foreach ($groups as $group=>$value)
    <option value="{{$value->id}}">{{$value->name}}</option>
    @endforeach
</select>
<input type="submit" value="Eliminar">
<form>