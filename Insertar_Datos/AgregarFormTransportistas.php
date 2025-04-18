<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Transportistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background: black; color:white"> AGREGAR TRANSPORTISTAS</h1>
    <div class="container">
        <form action="InsertarDatos(backend)/InsertarDatosTransportistas.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre del Transportista</label>
                <input type="text" class="form-control" name="NombreTransportista">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" name="Telefono">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="../Listados/listado_Transportistas.php" class="btn btn-dark">Regresar</a>

            </div>
        </form>




    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>