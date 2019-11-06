<form action="/comment/{{$comment->id}}" method="POST">
    @csrf
    @method('patch')
    <input type="text" name="body" value="{{$comment->body}}">
    <input type="hidden" name="offer_id" value="{{$comment->profile->id}}">
    <input type="submit" value="Editar">
</form>