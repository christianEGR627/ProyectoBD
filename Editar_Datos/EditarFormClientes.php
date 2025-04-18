<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Clientes</title>
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
    <h1 class="text-center" style="background: black; color:white"> EDITAR CLIENTES</h1>
    <br>
    <form class="container" action="EditarDatos(backend)/EditarDatosClientes.php" method="POST">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM Clientes WHERE ClienteID=" . $_REQUEST['ClienteID'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="ClienteID" value="<?php echo $row['ClienteID']; ?>">


        <div class="mb-3">
            <label class="form-label">Nombre del Cliente</label>
            <input type="text" class="form-control" name="NombreCliente" value="<?php echo $row['NombreCliente']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre del Contacto</label>
            <input type="text" class="form-control" name="NombreContacto" value="<?php echo $row['NombreContacto']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Direccion</label>
            <input type="text" class="form-control" name="Direccion" value="<?php echo $row['Direccion']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input type="text" class="form-control" name="Ciudad" value="<?php echo $row['Ciudad']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" name="CodigoPostal" value=" <?php echo $row['CodigoPostal']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Pais</label>
            <input type="text" class="form-control" name="Pais" value="<?php echo $row['Pais']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="../Listados/listado_Clientes.php" class="btn btn-dark">Regresar</a>
    </form>




</body>