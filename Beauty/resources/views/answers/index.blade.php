<form method="GET" action="/main">
    <input type="submit" value="Página principal">
    </form>
    
    @foreach ($answers as $answer=>$value)
    <li> {{$value->body}}
    </li>
    @endforeach