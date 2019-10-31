<form method="GET" action="/main">
<input type="submit" value="Página principal">
</form>
<form method="GET" action="/group/create">
<input type="submit" value="Crear Grupo">
</form>

@foreach ($groups as $group)
<li> {{$group->name}} <form method="GET" action="/group/{{$group->id}}">
<input type="submit" value="Mostrar">
</form>
</li>
@endforeach