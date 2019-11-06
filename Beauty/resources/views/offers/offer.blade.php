<form method="GET" action="/main">
    <input type="submit" value="Página principal">
</form>

<?php
    echo "Título: $offer->title <br>";
    echo "Descripción: $offer->description";
 ?>
 
@can ('edit', $offer)
    <form action="/offer/{{$offer->id}}/edit" method="GET">
        <input type="submit" value="Editar">
    </form>
@endcan

@can ('delete', $offer)
    <form action="/offer/{{$offer->id}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
@endcan

@include('answers.create')
@include('answers.list',['answers'=>$offer->answers])