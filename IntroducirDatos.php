<?php
// Incluir el archivo de conexión (si es necesario)
include('conexion.php');
?>

<h2>Agregar Alumno</h2>
<form action="InsertarAlumno.php" method="POST">
    <div>
        Nombre:
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    
    <div>
        Edad:
        <input type="number" class="form-control" id="edad" name="edad" required>
    </div>
    
    <div>
        Curso:
        <select id="curso" name="curso" required>
            <option value="ASIR2">ASIR2</option>
            <option value="ASIR1">ASIR1</option>
            <option value="DAW1">DAW1</option>
            <option value="DAM1">DAM1</option>
            <option value="DAW2">DAW2</option>
            <option value="DAM2">DAM2</option>
        </select>
    </div>
    
    <button type="submit">Insertar Alumno</button>
</form>
</div>

<!-- Scripts de Bootstrap -->
     <!-- Agregar el script de Bootstrap 5 desde el CDN al final del body -->
     <!-- <script src="js/bootstrap.bundle.min.js"></script>-->