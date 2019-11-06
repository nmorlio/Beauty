<form method="GET" action="/profile/{{$user->id}}">
    <input type="submit" value="Volver">
</form>

<form method="POST" action="/user{{$user->id}}/addToGroup">
    @csrf 
    @method('patch')
    <select name="group_id">
        @foreach ($groups as $group)
            <option value="{{$group->id}}">
                {{$group->name}}
            </option>
        @endforeach
    </select>
    <input type="submit" value="Añadir">
<form>