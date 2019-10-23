<form method="GET" action="/group">
<input type="submit" value="Mostrar Grupos">
</form>
<form method="GET" action="/profile">
<input type="submit" value="Mostrar Perfiles">
</form>
<form method="GET" action="/offer/create">
<input type="submit" value="Crear Oferta">
</form>

<form method="GET" action="/main">
<input type="submit" value="Página principal">
</form>

@foreach ($offers as $offer=>$value)
@if ($value->type==1)
<li> {{$value->title}} <br> {{$value->description}} 
<form method="GET" action="/offer/{{$value->id}}">
<input type="submit" value="Mostrar Oferta">
</form>
</li>
@endif
@endforeach



