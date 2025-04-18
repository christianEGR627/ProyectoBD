<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center" style="background-color: black; color: white; border-radius: 5px;">
            Editar Proveedores</h1>
        <br>
    </div>

    <form class="container" action="EditarDatos(backend)/EditarDatosProveedores.php" method="post">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM  Proveedores WHERE ProveedorID =" . $_REQUEST['idProveedor'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>

        <input type="hidden" class="form-control" name="ID" value="<?php echo $row['ProveedorID'] ?>">

        <div class="mb-3">
            <label class="form-label">NombreProveedor</label>
            <input type="text" class="form-control" name="NombreProveedor"
                value="<?php echo $row['NombreProveedor'] ?>">
        </div>
        <br>

        <div class="mb-3">
            <label class="form-label">NombreContacto</label>
            <input type="text" class="form-control" name="NombreContacto" value="<?php echo $row['NombreContacto'] ?>">

        </div>

        <div class="mb-3">
            <label class="form-label">Direccion</label>
            <input type="text" class="form-control" name="Direccion" value="<?php echo $row['Direccion'] ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input type="text" class="form-control" name="Ciudad" value="<?php echo $row['Ciudad'] ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Codigo Postal</label>
            <input type="text" class="form-control" name="CodigoPostal" value="<?php echo $row['CodigoPostal'] ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Pais</label>
            <input type="text" class="form-control" name="Pais" value="<?php echo $row['Pais'] ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" class="form-control" name="Telefono" value="<?php echo $row['Telefono'] ?>">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../Listados/listado_Proveedores.php" class="btn btn-dark">Regresar</a>
        </div>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>