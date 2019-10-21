<form method="POST" action="/offer">
    @csrf
    <label>Ofertas</label>
    <input type="text" name="title">
    <br>
    <label>Descripción:</label>
    <input type="text" name="description">
    <br>
    <label>Tipo de Oferta</label>
    <select name="type">
      <option value="0">Busco Grupo</option>
      <option value="1">Busco Integrante(s)</option>
    </select>
<input type="submit">
</form>