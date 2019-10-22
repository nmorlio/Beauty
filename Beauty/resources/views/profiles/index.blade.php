@foreach ($profiles as $profile=>$value)
<li> {{$value->name}}<form method="GET" action="/profile/{{$value->id}}">
<input type="submit" value="Mostrar">
</form>


</li>
@endforeach
<form method="GET" action="/offer">
<input type="submit" value="Lista de Ofertas">
</form>