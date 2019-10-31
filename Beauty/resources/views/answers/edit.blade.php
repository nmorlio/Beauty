<form action="/answer/{{$answer->id}}" method="POST">
    @csrf
    @method('patch')
    <input type="text" name="body" value="{{$answer->body}}">
    <input type="submit" value="Editar">

</form>