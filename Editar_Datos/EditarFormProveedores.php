<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Proveedores</title>
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
        <h1 class="form-title text-center">Editar Proveedor</h1>
        <br>
    </div>

    <form class="form-container" action="EditarDatos(backend)/EditarDatosProveedores.php" method="post">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM Proveedores WHERE ProveedorID =" . $_REQUEST['idProveedor'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>

        <input type="hidden" class="form-control" name="ID" value="<?php echo $row['ProveedorID'] ?>">

        <div class="mb-3">
            <label for="nombreProveedor" class="form-label">Nombre del Proveedor</label>
            <input type="text" class="form-control" id="nombreProveedor" name="NombreProveedor"
                value="<?php echo $row['NombreProveedor'] ?>">
        </div>
        <br>

        <div class="mb-3">
            <label for="nombreContacto" class="form-label">Nombre del Contacto</label>
            <input type="text" class="form-control" id="nombreContacto" name="NombreContacto" value="<?php echo $row['NombreContacto'] ?>">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" value="<?php echo $row['Direccion'] ?>">
        </div>

        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="Ciudad" value="<?php echo $row['Ciudad'] ?>">
        </div>

        <div class="mb-3">
            <label for="codigoPostal" class="form-label">Código Postal</label>
            <input type="text" class="form-control" id="codigoPostal" name="CodigoPostal" value="<?php echo $row['CodigoPostal'] ?>">
        </div>

        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <input type="text" class="form-control" id="pais" name="Pais" value="<?php echo $row['Pais'] ?>">
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="Telefono" value="<?php echo $row['Telefono'] ?>">
        </div>

        <div class="form-actions text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save icon"></i> Guardar Cambios</button>
            <a href="../Listados/listado_Proveedores.php" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Regresar</a>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>