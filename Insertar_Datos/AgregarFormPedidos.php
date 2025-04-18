<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <br>
    <h1 class="text-center" style="background: black; color:white">AGREGAR PEDIDOS</h1>
    <div class="container">
        <br>
        <form action="InsertarDatos(backend)/InsertarDatosPedidos.php" method="POST">
            <label for="">Nombre del Cliente</label>
            <select class="form-select mb-3" name="NombreCliente">
                <option selected disabled>Seleccionar un Cliente</option>
                <?php
                include("../Config/Conexion.php");
                $sql = $conexion->query("SELECT*FROM Clientes");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['ClienteID'] . "'>" . $resultado['NombreCliente'] . "</option>";
                }


                ?>

            </select>


            <label for="">Nombre del Empleado</label>
            <select class="form-select mb-3" name="NombreEmpleado">
                <option selected disabled>Seleccionar un Empleado</option>
                <?php
                include("../Config/Conexion.php");
                $sql = $conexion->query("SELECT*FROM Empleados");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['EmpleadoID'] . "'>" . $resultado['Nombre'] . "</option>";
                }


                ?>

            </select>

            <div class="mb-3">
                <label class="form-label">Fecha del Pedido</label>
                <input type="Date" class="form-control" name="FechaPedido">
            </div>


            <label for="">Nombre del Transportista</label>
            <select class="form-select mb-3" name="NombreTransportista">
                <option selected disabled>Seleccionar un Transportista</option>
                <?php
                include("../Config/Conexion.php");
                $sql = $conexion->query("SELECT*FROM Transportistas");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='" . $resultado['TransportistaID'] . "'>" . $resultado['NombreTransportista'] . "</option>";
                }


                ?>

            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="../Listados/listado_Pedidos.php" class="btn btn-dark">Regresar</a>
            </div>

        </form>




    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>