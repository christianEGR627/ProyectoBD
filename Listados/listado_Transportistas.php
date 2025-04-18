<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado Transportistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color: white">LISTADO  DE TRANSPORTISTAS</h1>



    </div>
    <div class="container">
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="background-color: black; color: white">Transportista ID</th>
                    <th scope="col" style="background-color: black; color: white">Nombre </th>
                    <th scope="col" style="background-color: black; color: white">Telefono</th>
                    <th scope="col" style="background-color: black; color: white">Acciones</th>




                </tr>
            </thead>
            <tbody>
                <?php
                require("../Config/Conexion.php");
                $sql = $conexion->query("SELECT*FROM  Transportistas");
                while ($resultado = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['TransportistaID'] ?></th>
                        <th scope="row"><?php echo $resultado['NombreTransportista'] ?></th>
                        <th scope="row"><?php echo $resultado['Telefono'] ?></th>
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
            <a href="../Insertar_Datos/AgregarFormTransportistas.php" class="btn btn-success">Agregar Transportista</a>
        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>