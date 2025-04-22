<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Categorías</title>
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
        <h1 class="form-title text-center">Agregar Categoría</h1>
        <br>
    </div>

    <div class="form-container">
        <form action="InsertarDatos(backend)/InsertarDatosCategorias.php" method="post">
            <div class="mb-3">
                <label for="nombreCategoria" class="form-label">Nombre de la Categoría</label>
                <input type="text" class="form-control" id="nombreCategoria" name="NombreCategoria">
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="Descripcion">
            </div>

            <div class="form-actions text-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus icon"></i> Agregar Categoría</button>
                <a href="../Listados/listado_Categorias.php" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Regresar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>