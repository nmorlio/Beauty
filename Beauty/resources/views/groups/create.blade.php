<form method="POST" action="/reservation">
    @csrf
    <label>Name</label>
    <input type="text" name="name">
    <br>
    <label>Email</label>
    <input type="email" name="email">