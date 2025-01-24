<?php
// Recoger el nombre enviado desde el formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$edad = isset($_POST['edad']) ? $_POST['edad'] : '';
$promocion = isset($_POST['promocion']) ? $_POST['promocion'] : '';

// Mostrar el nombre recibido (opcional)
echo "<h1>Resultados del filtro</h1>";


if (!empty($nombre)) {
    echo "<p>Has filtrado por el nombre: <strong>" . htmlspecialchars($nombre) . "</strong></p>";
    include('conexion.php');
    $query = "SELECT id, nombre, edad, curso FROM alumnos 
    WHERE nombre = '$nombre'";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Error en la consulta: " . mysqli_error($conexion));
    }

    echo "<h2> Listado de estudiantes filtrado por nombre: $nombre</h2>";
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
} elseif (!empty($edad)) {
    echo "<p>Has filtrado por edad: <strong>" . htmlspecialchars($edad) . "</strong></p>";
    include('conexion.php');
    $query = "SELECT id, nombre, edad, curso FROM alumnos 
    WHERE edad = '$edad'";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Error en la consulta: " . mysqli_error($conexion));
    }

    echo "<h2> Listado de estudiantes filtrado por edad: $edad</h2>";
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
} else {
    echo "<p>No se ha proporcionado ningun dato para el filtro.</p>";
}


?>
