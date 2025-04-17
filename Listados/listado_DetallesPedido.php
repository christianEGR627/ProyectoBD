<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Detalles del Pedido</h1>

    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PedidoID</th>
                    <th scope="col">ProductoID</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>

            <?php
            include("../Config/Conexion.php");
            $sql = $conexion->query("SELECT * FROM DetallesPedido");

            if ($sql) {
                while ($resultado = $sql->fetch_assoc()) {

                    ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['DetallePedidoID']?></th>
                        <th scope="row"><?php echo $resultado['PedidoID']?></th>
                        <th scope="row"><?php echo $resultado['ProductoID']?></th>
                        <th scope="row"><?php echo $resultado['Cantidad']?></th>
                        
                    </tr>


                    <?php

                }

            } else {
                echo "Error al ejecutar la consulta" . $conexion->error;
            }

            ?>

            <tbody>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>