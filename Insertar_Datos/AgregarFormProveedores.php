<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Agregar Proveedor</h1>
    </div>

    <div class="container">

        <form action="InsertarDatos(backend)/InsertarDatosProveedores.php" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre del Proveedor</label>
                <input type="text" class="form-control" name="NombreProveedor">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre del contacto</label>
                <input type="text" class="form-control" name="NombreContacto">
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" name="Direccion">
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="Ciudad">
            </div>
            <div class="mb-3">
                <label class="form-label">Codigo Postal</label>
                <input type="text" class="form-control" name="CodigoPostal">
            </div>
            <div class="mb-3">
                <label class="form-label">Pais</label>
                <input type="text" class="form-control" name="Pais">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" name="Telefono">
            </div>

            <div class="container">
        <button type="submit" class="btn btn-danger">Enviar</button>
        <a href="../Listados/listado_Proveedores.php" class="btn btn-dark">Regresar</a>
    </div>

        </form>

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>