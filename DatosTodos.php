<?php
include('conexion.php'); 

$query = "SELECT id, nombre, edad, curso FROM alumnos";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

echo "<h2> Listado de estudiantes</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Curso</th>
        </tr>";

while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['nombre'] . "</td>
            <td>" . $row['edad'] . "</td>
            <td>" . $row['curso'] . "</td>
        </tr>";
}

echo "</table>";

?>