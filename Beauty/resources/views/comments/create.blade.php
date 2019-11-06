<form action="/comment" method="POST">
    @csrf
    <label>Comentar:</label>
        <input required type="text" name="body">
        <br>
        <input type="hidden" name="user_id" value="{{auth()->id()}}">
        <input type="hidden" name="profile_id" value="{{$user->id}}">
        <input type="submit" value="Enviar">
    </form>