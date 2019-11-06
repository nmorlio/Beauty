@foreach ($comments as $comment)
    <li> user ID:{{$comment->user_id}} Profile ID: {{$comment->profile_id}}: comentario: {{$comment->body}}
    </li>
    <br>
    @can('edit',$comment)
    <form action="/comment/{{$comment->id}}/edit" method="GET">
        <input type="submit" value="Editar">
    </form>
    @endcan
    @can('delete',$comment)
    <form action="/comment/{{$comment->id}}" method="POST">
        @csrf 
        @method('delete')
        <input type="hidden" name="profile_id" value="{{$user->id}}">
        <input type="submit" value="Eliminar">
    </form>
    @endcan
@endforeach