<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Listado de Productos</h1>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Unidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("../Config/Conexion.php");
                    $sql = $conexion->query("SELECT * FROM Productos
                                            INNER JOIN Proveedores 
                                            ON Productos.ProveedorID = Proveedores.ProveedorID
                                            INNER JOIN Categorias
                                            ON Productos.CategoriaID = Categorias.CategoriaID
                                            ORDER BY ProductoID ASC
                    "); 

                    if ($sql) { 
                        while($resultado = $sql->fetch_assoc()) {
                ?>

                            <tr>
                                <th scope="row"><?php echo $resultado['ProductoID']?></th>
                                <th scope="row"><?php echo $resultado['NombreProducto']?></th>
                                <th scope="row"><?php echo $resultado['NombreProveedor']?></th>
                                <th scope="row"><?php echo $resultado['NombreCategoria']?></th>
                                <th scope="row"><?php echo $resultado['Unidad']?></th>
                                <th scope="row"><?php echo '$' . $resultado['Precio']?></th>
                                <th>
                                    <a href="../Editar_Datos/EditarFormProductos.php?idProducto=<?php echo $resultado['ProductoID'] ?>"
                                    class="btn btn-warning">Editar</a>
                                    <a href="" class="btn btn-danger">Eliminar</a>
                                </th>
                            </tr>

                <?php
                        }
                    } else {
                        echo "Error al ejecutar la consulta: " . $conexion->error; 
                    }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <a href="../Insertar_Datos/AgregarFromProductos.php">Agregar Productos</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>