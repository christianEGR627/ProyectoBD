<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Transportistas</title>
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
    <h1 class="text-center" style="background: black; color:white"> EDITAR TRANSPORTISTAS</h1>

    <br>



    <form class="container" action="EditarDatos(backend)/EditarDatosTransportistas.php" method="POST">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT*FROM Transportistas WHERE TransportistaID=" . $_REQUEST['TransportistaID'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>
        <input type="Hidden" class="form-control" name="TransportistaID" value="<?php echo $row['TransportistaID']; ?>">

        <div class="mb-3">
            <label class="form-label">Nombre del Transportista</label>
            <input type="text" class="form-control" name="NombreTransportista"
                value="<?php echo $row['NombreTransportista']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" class="form-control" name="Telefono" value="<?php echo $row['Telefono']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="../Listados/listado_Transportistas.php" class="btn btn-dark">Regresar</a>
    </form>



</body>