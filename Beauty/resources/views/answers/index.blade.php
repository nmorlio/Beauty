<form method="GET" action="/main">
    <input type="submit" value="Página principal">
    </form>
    
    @foreach ($answers as $answer)
   @if ($answer->offer_id == $offer->id)
    <li> {{$answer->body}}
    </li>
    @endif
    @endforeach