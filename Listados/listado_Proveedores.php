<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Listado Proveedores</h1>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Responsable</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Codigo Postal</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../Config/Conexion.php");
                $sql = $conexion->query("SELECT * FROM Proveedores");

                if ($sql) {
                    while ($resultado = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $resultado['ProveedorID'] ?></th>
                            <th scope="row"><?php echo $resultado['NombreProveedor'] ?></th>
                            <th scope="row"><?php echo $resultado['NombreContacto'] ?></th>
                            <th scope="row"><?php echo $resultado['Direccion'] ?></th>
                            <th scope="row"><?php echo $resultado['Ciudad'] ?></th>
                            <th scope="row"><?php echo $resultado['CodigoPostal'] ?></th>
                            <th scope="row"><?php echo $resultado['Pais'] ?></th>
                            <th scope="row"><?php echo $resultado['Telefono'] ?></th>
                            <th>
                            <a href="../Editar_Datos/EditarFormProveedores.php?idProveedor=<?php echo $resultado['ProveedorID'] ?>"
                            class="btn btn-warning">Editar</a>
                                <a href="../EliminarDatos/EliminarProveedores.php?idProveedor=<?php echo $resultado['ProveedorID'] ?>"
                            class="btn btn-danger">Eliminar</a>
                            </th>
                            
                            
                        </tr>



                        <?php
                    }

                }else {
                    echo "Error al ejecutar la consulta" . $conexion->error;
                }

                ?>


            </tbody>
        </table>

    </div>

    <div class="conteiner">
        <a href="../Insertar_Datos/AgregarFormProveedores.php">Agregar Proveedor</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>