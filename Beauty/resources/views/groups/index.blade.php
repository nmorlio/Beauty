<form method="GET" action="/group/create">
<input type="submit" value="Crear Grupo">
</form>

@foreach ($groups as $group=>$value)
<li> {{$value->name}} <form method="GET" action="/group/{{$value->id}}">
<input type="submit" value="Mostrar">
</form>
</li>
@endforeach
<form method="GET" action="/offer">
<input type="submit" value="Lista de Ofertas">
</form>