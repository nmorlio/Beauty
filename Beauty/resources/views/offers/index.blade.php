@foreach ($offers as $offer=>$value)
<li> {{$value->name}} <form method="GET" action="/offer/{{$value->id}}">
<input type="submit" value="Mostrar Oferta">
</form>
</li>
@endforeach
<form method="GET" action="/group">
<input type="submit" value="Mostrar Grupos">
</form>
<form method="GET" action="/profile">
<input type="submit" value="Mostrar Perfiles">
</form>