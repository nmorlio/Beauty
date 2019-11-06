@foreach ($comments as $comment)
    <li> {{$comment->user_id->name}}: {{$comment->body}}
    </li>
    <br>
    <form action="/comment/{{$comment->id}}/edit" method="GET">
        <input type="submit" value="Editar">
    </form>
@endforeach