<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="conteiner">
        <h1 class="bg-black p-2 text-white text-center">Agregar Productos</h1>
    </div>

    <div class="conteiner">
        <form action="InsertarDatos(backend)/InsertarDatosProductos.php" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="Nombre">
            </div>

            <!--inicio del select proveedor-->
            <label for="">Proveedor</label>
            <br>
            <select class="form-select" name="ProveedorP">
                <option selected>--Selecciona el Proveedor--</option>
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
            <!--fin del select proveedor -->

            <br>
            <br>

            <!--inicio del select categoria -->
            <label for="">Categoria</label>
            <br>
            <select class="form-select" name="CategoriaP">
                <option selected>--Selecciona la Categoria--</option>
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
                    echo "<option disabled>Error al cargar una categoria</option>";
                }
                ?>
            </select>
            <!--fin del select categoria -->

            <br>
            <br>
            <div class="mb-3">
                <label class="form-label">Unidad</label>
                <input type="text" class="form-control" name="Unidad">
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="text" class="form-control" name="Precio">
            </div>


            <div class="text-center">
                <button tipe="submit" class="btn btn-danger">Enviar</button>
                <a href="../Listados/listado_Productos.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>