<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
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
        <h1 class="form-title text-center">Agregar Producto</h1>
        <br>
    </div>

    <div class="form-container">
        <form action="InsertarDatos(backend)/InsertarDatosProductos.php" method="post">
            <div class="mb-3">
                <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombreProducto" name="Nombre">
            </div>

            <div class="mb-3">
                <label for="proveedorP" class="form-label">Proveedor</label>
                <select class="form-select" id="proveedorP" name="ProveedorP" aria-label="Selecciona el Proveedor">
                    <option selected disabled>--Selecciona el Proveedor--</option>
                    <?php
                    ini_set("display_errors", 1);
                    ini_set("display_startup_errors", 1);

                    include("../Config/Conexion.php");
                    $sqlProveedores = $conexion->query("SELECT ProveedorID,NombreProveedor FROM Proveedores");
                    if ($sqlProveedores) {
                        while ($resultadoProveedor = $sqlProveedores->fetch_assoc()) {
                            echo "<option value='" . $resultadoProveedor['ProveedorID'] . "'>" . $resultadoProveedor['NombreProveedor'] . "</option>";
                        }
                    } else {
                        echo "<option disabled>Error al cargar un proveedor</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="categoriaP" class="form-label">Categoría</label>
                <select class="form-select" id="categoriaP" name="CategoriaP" aria-label="Selecciona la Categoría">
                    <option selected disabled>--Selecciona la Categoría--</option>
                    <?php
                    ini_set("display_errors", 1);
                    ini_set("display_startup_errors", 1);

                    include("../Config/Conexion.php");
                    $sqlCategorias = $conexion->query("SELECT CategoriaID,NombreCategoria FROM Categorias");
                    if ($sqlCategorias) {
                        while ($resultadoCategoria = $sqlCategorias->fetch_assoc()) {
                            echo "<option value='" . $resultadoCategoria['CategoriaID'] . "'>" . $resultadoCategoria['NombreCategoria'] . "</option>";
                        }
                    } else {
                        echo "<option disabled>Error al cargar una categoría</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="unidad" class="form-label">Unidad</label>
                <input type="text" class="form-control" id="unidad" name="Unidad">
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="Precio">
            </div>

            <div class="form-actions text-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus icon"></i> Agregar Producto</button>
                <a href="../Listados/listado_Productos.php" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Regresar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>