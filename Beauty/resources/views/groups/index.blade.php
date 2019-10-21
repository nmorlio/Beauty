@foreach ($groups as $group=>$value)
<li> {{$value->name}} <form method="GET" action="/group/{{$value->id}}">
<input type="submit" value="Mostrar">
</form>
</li>
@endforeach