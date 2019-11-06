@foreach ($comments as $comment)
    <li> {{$comment->user_id->name}}: {{$comment->body}}
    </li>
    <br>
@endforeach