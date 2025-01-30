<?php
// Incluir el archivo de conexión (si es necesario)
include('conexion.php');

// Verificar si se ha enviado el formulario por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //isset sirve para saber que existe la variable que ponemos en el POST
    //empty sirve para comprobar que la variable no está vacía
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

        // Consultar los datos de la base de datos filtrados por nombre
        // Creamos la variable '$query' para almacenar la consulta
        $query = "SELECT id, nombre, edad, curso FROM alumnos 
        WHERE nombre LIKE '%$nombre%'";
        //Ejecutamos la variable query almacenada anteriormente mediante la conexion
        $resultado = mysqli_query($conexion, $query);

        // Verificar si la consulta fue exitosa, esto despues no se lo podemos mostrar al cliente,
        // hay que poner un error como  "No se ha encontrado el nombre en la base de datos"
        if (!$resultado) {
            //poner un mensaje para explicar que no se ha encontrado alumno con ese nombre
            die("Error en la consulta: " . mysqli_error($conexion));
            echo "<div class='mt-4'>
            <a href='AltaAlumno.php' class='btn btn-success'>Añadir Nuevo Alumno</a>
            <a href='DatosTodos.php' class='btn btn-info'>Ver Todos los Alumnos</a>
            <a href='opciones.php' class='btn btn-secondary'>Volver</a>
      </div>";

            //Facilitar un enlace al fichero de alta de alumnos, por si quiere introducir uno nuevo
            //Facilitar un enlace al fichero que muestra todos los alumnos
            //Añadir un botón de volver para volver a la pagina de opciones.php
        }

        // Mostrar los resultados en formato de tabla
        echo "<div class='container mt-4'>
                <h2>Resultados para: " . htmlspecialchars($nombre) . "</h2>
                <table class='table table-bordered table-striped'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Curso</th>
                            <th>Promociona</th>
                        </tr>
                    </thead>
                    <tbody>";

        // Recorrer cada fila de resultados y mostrarla
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['nombre'] . "</td>
                    <td>" . $row['edad'] . "</td>
                    <td>" . $row['curso'] . "</td>
                </tr>";
        }

        echo "</tbody></table></div>";
    } else {
        echo "<div class='container mt-4'>
                <h2>No se proporcionó un nombre para la búsqueda</h2>
              </div>";
    }
} else {
    echo "<div class='container mt-4'>
            <h2>Acceso no permitido. El formulario debe enviarse mediante POST.</h2>
          </div>";
}

?>