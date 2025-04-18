<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <br>

    <div class="container">
        <h1 class="text-center" style="background: black; color:white"> LISTADO  DE CLIENTES</h1>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"style="background: black; color:white">ClienteID</th>
                    <th scope="col"style="background: black; color:white">Nombre del Cliente</th>
                    <th scope="col"style="background: black; color:white">Nombre del Contacto</th>
                    <th scope="col"style="background: black; color:white">Dirección</th>
                    <th scope="col"style="background: black; color:white">Ciudad</th>
                    <th scope="col"style="background: black; color:white">Codigo Postal</th>
                    <th scope="col"style="background: black; color:white">Pais</th>
                    <th scope="col"style="background: black; color:white">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require("../Config/Conexion.php");
                $sql = $conexion->query("SELECT *FROM Clientes
                ");
                while ($resultado = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['ClienteID'] ?></th>
                        <th scope="row"><?php echo $resultado['NombreCliente'] ?></th>
                        <th scope="row"><?php echo $resultado['NombreContacto'] ?></th>
                        <th scope="row"><?php echo $resultado['Direccion'] ?></th>
                        <th scope="row"><?php echo $resultado['Ciudad'] ?></th>
                        <th scope="row"><?php echo $resultado['CodigoPostal'] ?></th>
                        <th scope="row"><?php echo $resultado['Pais'] ?></th>
                        <th>
                            <a href="" class="btn btn-warning">Editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                    <?php

                }


                ?>
            </tbody>
        </table>
        <div class="container">
            <a href="../Insertar_Datos/AgregarFormClientes.php" class="btn btn-success">Agregar Cliente</a>


        </div>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>