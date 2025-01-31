<?php
// Incluir el archivo de conexión
include('conexion.php');


$query = "SELECT id, nombre, edad, curso FROM alumnos WHERE nombre = '$nombre'"; 
$resultado = mysqli_query($conexion, $query);

//Mediante el formulario IntroducirDatos.php por método POST, recibo:
    // name = "id"
    // name = "nombre"
    // name = "edad"
    // name = "curso"

$sql = "INSERT INTO alumnos (id, nombre, edad, curso)
VALUES (NULL, '$nombre', '$edad', '$curso');";
?>