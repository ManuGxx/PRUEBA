<h1>Leer Datos: </h1>
<form action="DatosTodos.php" method="POST">
    <input type="submit" name="envio" value="Todos">
</form>
<h3>Filtros: </h3>
Por nombre:
<form action="LeerFiltroApuntes.php" method="POST">
    <input type="text" name="nombre" placeholder="Escribe un nombre">
    <button type="submit">Ver</button>
</form>

Por edad:
<form action="LeerFiltroApuntes.php" method="POST">
    <input type="text" name="edad" placeholder="Escribe una edad">
    <button type="submit">Ver</button>
</form>

Promocion: 
<form action="LeerFiltroApuntes.php" method="POST">
<select name="promocion">
    <option value="todos" selected="selected">Todas</option>
    <option value="ASIR2">ASIR2</option>
    <option value="4 ESO">4 ESO</option>
</select>

<button type="submit">Ver</button>
</form>