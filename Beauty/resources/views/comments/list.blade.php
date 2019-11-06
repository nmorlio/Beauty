@foreach ($comments as $comment)
    <li> user ID:{{$comment->user_id}} Profile ID: {{$comment->profile_id}}: comntario: {{$comment->body}}
    </li>
    <br>
    <form action="/comment/{{$comment->id}}/edit" method="GET">
        <input type="submit" value="Editar">
    </form>
@endforeach

{{-- TODO: cambiar profile_id por user_id --}}