<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Productos</title>
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
        <h1 class="form-title text-center">Editar Producto</h1>
        <br>
    </div>

    <form class="form-container" action="EditarDatos(backend)/EditarDatosProductos.php" method="post">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM Productos WHERE ProductoID =" . $_REQUEST['idProducto'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>

        <input type="hidden" class="form-control" name="ID" value="<?php echo $row['ProductoID'] ?>">

        <div class="mb-3">
            <label for="nombreProducto" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombreProducto" name="NombreProducto" value="<?php echo $row['NombreProducto'] ?>">
        </div>
        <br>

        <div class="mb-3">
            <label for="proveedor" class="form-label">Proveedor</label>
            <select class="form-select" id="proveedor" aria-label="Seleccione un Proveedor" name="Proveedor">
                <option selected disabled>--Seleccione Proveedor--</option>
                <?php
                include("../Config/Conexion.php");
                $sqlProveedorSeleccionado = "SELECT * FROM Proveedores WHERE ProveedorID =" . $row['ProveedorID'];
                $resultadoProveedorSeleccionado = $conexion->query($sqlProveedorSeleccionado);
                $rowProveedorSeleccionado = $resultadoProveedorSeleccionado->fetch_assoc();
                echo "<option selected value='" . $rowProveedorSeleccionado['ProveedorID'] . "'>" . $rowProveedorSeleccionado['NombreProveedor'] . "</option>";

                $sqlProveedores = "SELECT * FROM Proveedores";
                $resultadoProveedores = $conexion->query($sqlProveedores);
                while ($filaProveedor = $resultadoProveedores->fetch_assoc()) {
                    echo "<option value='" . $filaProveedor['ProveedorID'] . "'>" . $filaProveedor['NombreProveedor'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <select class="form-select" id="categoria" aria-label="Seleccione una Categoría" name="Categoria">
                <option selected disabled>--Seleccione Categoría--</option>
                <?php
                include("../Config/Conexion.php");
                $sqlCategoriaSeleccionada = "SELECT * FROM Categorias WHERE CategoriaID =" . $row['CategoriaID'];
                $resultadoCategoriaSeleccionada = $conexion->query($sqlCategoriaSeleccionada);
                $rowCategoriaSeleccionada = $resultadoCategoriaSeleccionada->fetch_assoc();
                echo "<option selected value='" . $rowCategoriaSeleccionada['CategoriaID'] . "'>" . $rowCategoriaSeleccionada['NombreCategoria'] . "</option>";

                $sqlCategorias = "SELECT * FROM Categorias";
                $resultadoCategorias = $conexion->query($sqlCategorias);
                while ($filaCategoria = $resultadoCategorias->fetch_assoc()) {
                    echo "<option value='" . $filaCategoria['CategoriaID'] . "'>" . $filaCategoria['NombreCategoria'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="unidad" class="form-label">Unidad</label>
            <input type="text" class="form-control" id="unidad" name="Unidad" value="<?php echo $row['Unidad'] ?>">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" name="Precio" value="<?php echo $row['Precio'] ?>">
        </div>

        <div class="form-actions text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save icon"></i> Guardar Cambios</button>
            <a href="../Listados/listado_Productos.php" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Regresar</a>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>