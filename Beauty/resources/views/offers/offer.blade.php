<?php
    echo "Título: $offer->title <br>";
    echo "Descripción: $offer->description";
 ?>
<form action="/offer" method="GET">
    <input type="submit" value="Lista de Ofertas">


</form>

<form action="/offer/{{$offer->id}}" method="POST">
@csrf
@method('delete')
<input type="submit" value="Eliminar">
</form>
