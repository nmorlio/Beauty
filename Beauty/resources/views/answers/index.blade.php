<form method="GET" action="/main">
    <input type="submit" value="Página principal">
    </form>
    
    @foreach ($answers as $answer)
   
    <li> {{$answer->body}}
    </li>
    
    @endforeach