@foreach ($comments as $comment)
    <li> user ID:{{$comment->user_id}} Profile ID: {{$comment->profile_id}}: comntario: {{$comment->body}}
    </li>
    <br>
    @can('edit',$comment)
    <form action="/comment/{{$comment->id}}/edit" method="GET">
        <input type="submit" value="Editar">
    </form>
    @endcan
    <form action="/comment/{{$comment->id}}" method="POST">
        @csrf 
        @method('delete')
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <input type="submit" value="Eliminar">
    </form>
@endforeach

{{-- TODO: cambiar profile_id por user_id --}}