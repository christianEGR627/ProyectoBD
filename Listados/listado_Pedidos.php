<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color: white">
            </h1class>LISTADO DE PEDIDOS</h1>


    </div>
    <div class="container">
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="background-color: black; color: white">PedidoID</th>
                    <th scope="col" style="background-color: black; color: white">Cliente</th>
                    <th scope="col" style="background-color: black; color: white">Empleado</th>
                    <th scope="col" style="background-color: black; color: white">Fecha del Pedido</th>
                    <th scope="col" style="background-color: black; color: white">Transportista</th>
                    <th scope="col" style="background-color: black; color: white">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php

                require("../Config/Conexion.php");
                $sql = $conexion->query("SELECT * FROM Pedidos
                INNER JOIN Clientes
                ON Pedidos.ClienteID=Clientes.ClienteID

                INNER JOIN Empleados
                ON Pedidos.EmpleadoID=Empleados.EmpleadoID

                INNER JOIN Transportistas
                ON Pedidos.TransportistaID=Transportistas.TransportistaID
                ORDER BY PedidoID ASC
        
                ");
                while ($resultado = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['PedidoID'] ?></th>
                        <th scope="row"><?php echo $resultado['NombreCliente'] ?></th>
                        <th scope="row"><?php echo $resultado['Nombre'] ?></th>
                        <th scope="row"><?php echo $resultado['FechaPedido'] ?></th>
                        <th scope="row"><?php echo $resultado['NombreTransportista'] ?></th>
                        <th>
                            <a href="" class="btn btn-warning">Editar</a>
                          <!--  <a href="" class="btn btn-danger">Eliminar</a>-->
                        </th>



                    </tr>

                    <?php


                }







                ?>





            </tbody>
        </table>
        <div class="container">
        <a href="" class="btn btn-success"> Agregar Pedido</a>
        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>