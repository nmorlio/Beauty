<form method="GET" action="/main">
<input type="submit" value="Página principal">
</form>

<?php
    echo "Título: $offer->title <br>";
    echo "Descripción: $offer->description";
 ?>
 @if (Auth::user()->id == $offer->user_id)
<form action="/offer/{{$offer->id}}/edit" method="GET">
<input type="submit" value="Editar">
</form>

<form action="/offer/{{$offer->id}}" method="POST">
@csrf
@method('delete')
<input type="submit" value="Eliminar">
</form>
@endif


@include('answers.create')

@include('answers/answer')