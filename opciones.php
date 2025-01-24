<h1>Leer Datos: </h1>
<form action="DatosTodos.php" method="POST">
    <input type="submit" name="envio" value="Todos">
</form>
<h3>Filtros: </h3>
Por nombre: <input name="nombre">
<input type="submit" name="envio" value="Ver"/><br>
Por edad: <input name="edad">
<input type="submit" name="envio" value="Ver"/><br>
Promocion: <select name="promocion">
        <option value="todos" selected="selected">Todas</option>
        <option value="ASIR2">ASIR2</option>
        <option value="4 ESO">4 ESO</option>
    </select>