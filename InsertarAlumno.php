<?php
// Incluir el archivo de conexión
include('conexion.php');

//Mediante el formulario IntroducirDatos.php por método POST, recibo:
    // name = "id"
    // name = "nombre"
    // name = "edad"
    // name = "curso"


//Primero comprobamos que las variables existen y no están vacías
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Compruebo que entrado en introducir.php por llamada POST
    
    // Comprobación del nombre
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
    // Comprobación de la edad
    if (isset($_POST['edad']) && !empty($_POST['edad'])) {
        $edad = $_POST['edad'];
    // Comprobación del curso
    if (isset($_POST['curso']) && !empty($_POST['curso'])) {
        $curso = $_POST['curso'];

        // todas las variables se han recibido correctamente, por lo que voy a lanzar 
        // una consulta de insert into
    
    $sql = "INSERT INTO alumnos (id, nombre, edad, curso) VALUES (NULL, '$nombre', '$edad', '$curso');";
    $resultado = mysqli_query($conexion, $sql);
    echo "<h2>Alumno insertado correctamente</h2>";



    $query = "SELECT id, nombre, edad, curso FROM alumnos 
    WHERE nombre = '$nombre'"; //Creamos la variable "Query" con la consulta que queremos realizar
    $resultado = mysqli_query($conexion, $query); //Lanzamos la consulta a traves de la variable "Query"    
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

}}}

}
?>