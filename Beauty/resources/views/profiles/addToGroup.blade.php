<form method="POST" action="/user{{$user->id}}/addToGroup">
@csrf 
@method('patch')
<select name="group_id">
    @foreach ($groups as $group=>$value)
            <option value="{{$value->id}}">{{$value->name}}</option>
    @endforeach
</select>
<input type="submit" value="Añadir">
<form>
