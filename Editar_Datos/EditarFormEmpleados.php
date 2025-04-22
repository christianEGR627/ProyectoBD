<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/estilos_tablas.css">
</head>

<body>

    <div class="container">
        <h1 class="form-title text-center">Editar Empleado</h1>
        <br>
    </div>

    <form class="form-container" action="EditarDatos(backend)/EditarDatosEmpleados.php" method="POST">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM Empleados WHERE EmpleadoID=" . $_REQUEST['EmpleadoID'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>
        <input type="hidden" class="form-control" name="EmpleadoID" value="<?php echo $row['EmpleadoID']; ?>">

        <div class="mb-3">
            <label for="apellidoEmpleado" class="form-label">Apellido del Empleado</label>
            <input type="text" class="form-control" id="apellidoEmpleado" name="Apellido" value="<?php echo $row['Apellido']; ?>">
        </div>

        <div class="mb-3">
            <label for="nombreEmpleado" class="form-label">Nombre del Empleado</label>
            <input type="text" class="form-control" id="nombreEmpleado" name="Nombre" value="<?php echo $row['Nombre']; ?>">
        </div>

        <div class="mb-3">
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="Date" class="form-control" id="fechaNacimiento" name="FechaNacimiento"
                value="<?php echo $row['FechaNacimiento']; ?>">
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="Foto" value="<?php echo $row['Foto']; ?>">
        </div>

        <div class="mb-3">
            <label for="notas" class="form-label">Notas</label>
            <input type="text" class="form-control" id="notas" name="Notas" value="<?php echo $row['Notas']; ?>">
        </div>

        <div class="form-actions text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save icon"></i> Guardar Cambios</button>
            <a href="../Listados/listado_Empleados.php" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Regresar</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>