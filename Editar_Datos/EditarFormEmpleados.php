<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>

<body>
    <br>
    <h1 class="text-center" style="background: black; color:white"> EDITAR EMPLEADOS</h1>
    <br>
    <form class="container" action="EditarDatos(backend)/EditarDatosEmpleados.php" method="POST">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM Empleados WHERE EmpleadoID=" . $_REQUEST['EmpleadoID'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="EmpleadoID" value="<?php echo $row['EmpleadoID']; ?>">


        <div class="mb-3">
            <label class="form-label">Apellido del Empleado</label>
            <input type="text" class="form-control" name="Apellido" value="<?php echo $row['Apellido']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre del Empleado</label>
            <input type="text" class="form-control" name="Nombre" value="<?php echo $row['Nombre']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="Date" class="form-control" name="FechaNacimiento"
                value="<?php echo $row['FechaNacimiento']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="text" class="form-control" name="Foto" value="<?php echo $row['Foto']; ?>">
        </div>


        <div class="mb-3">
            <label class="form-label">Notas</label>
            <input type="text" class="form-control" name="Notas" value="<?php echo $row['Notas']; ?>">
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="../Listados/listado_Empleados.php" class="btn btn-dark">Regresar</a>

    </form>










</body>