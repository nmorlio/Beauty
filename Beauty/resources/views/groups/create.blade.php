<form method="POST" action="/reservation">
    @csrf
    <label>Name</label>
    <input type="text" name="name">
    <br>
    <label>Description</label>
    <input type="text" name="description">

