<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Pedidos</title>
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
        <h1 class="form-title text-center">Editar Pedido</h1>
        <br>
    </div>

    <form class="form-container" action="EditarDatos(backend)/EditarDatosPedidos.php" method="post">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM Pedidos WHERE PedidoID=" . $_REQUEST['PedidoID'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>
        <input type="hidden" class="form-control" name="PedidoID" value="<?php echo $row['PedidoID']; ?>">

        <div class="mb-3">
            <label for="nombreCliente" class="form-label">Nombre del Cliente</label>
            <select class="form-select" id="nombreCliente" aria-label="Seleccione un Cliente" name="NombreCliente">
                <option selected disabled>--Seleccione un Cliente--</option>
                <?php
                include("../Config/Conexion.php");
                $sqlClienteSeleccionado = "SELECT * FROM Clientes WHERE ClienteID=" . $row['ClienteID'];
                $resultadoClienteSeleccionado = $conexion->query($sqlClienteSeleccionado);
                $rowClienteSeleccionado = $resultadoClienteSeleccionado->fetch_assoc();
                echo "<option selected value='" . $rowClienteSeleccionado['ClienteID'] . "'>" . $rowClienteSeleccionado['NombreCliente'] . "</option>";

                $sqlClientes = "SELECT * FROM Clientes";
                $resultadoClientes = $conexion->query($sqlClientes);
                while ($filaCliente = $resultadoClientes->fetch_array()) {
                    echo "<option value='" . $filaCliente['ClienteID'] . "'>" . $filaCliente['NombreCliente'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="nombreEmpleado" class="form-label">Nombre del Empleado</label>
            <select class="form-select" id="nombreEmpleado" aria-label="Seleccione un Empleado" name="Nombre">
                <option selected disabled>--Seleccione un Empleado--</option>
                <?php
                include("../Config/Conexion.php");

                $sqlEmpleadoSeleccionado = "SELECT * FROM Empleados WHERE EmpleadoID = " . $row['EmpleadoID'];
                $resultadoEmpleadoSeleccionado = $conexion->query($sqlEmpleadoSeleccionado);
                $rowEmpleadoSeleccionado = $resultadoEmpleadoSeleccionado->fetch_assoc();
                echo "<option selected value='" . $rowEmpleadoSeleccionado['EmpleadoID'] . "'>" . $rowEmpleadoSeleccionado['Nombre'] . "</option>";

                $sqlEmpleados = "SELECT * FROM Empleados";
                $resultadoEmpleados = $conexion->query($sqlEmpleados);
                while ($filaEmpleado = $resultadoEmpleados->fetch_array()) {
                    echo "<option value='" . $filaEmpleado['EmpleadoID'] . "'>" . $filaEmpleado['Nombre'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="fechaPedido" class="form-label">Fecha del Pedido</label>
            <input type="Date" class="form-control" id="fechaPedido" name="FechaPedido" value="<?php echo $row['FechaPedido']; ?>">
        </div>

        <div class="mb-3">
            <label for="nombreTransportista" class="form-label">Nombre del Transportista</label>
            <select class="form-select" id="nombreTransportista" aria-label="Seleccione un Transportista" name="NombreTransportista">
                <option selected disabled>--Seleccione un Transportista--</option>
                <?php
                include("../Config/Conexion.php");

                $sqlTransportistaSeleccionado = "SELECT * FROM Transportistas WHERE TransportistaID = " . $row['TransportistaID'];
                $resTransportistaSeleccionado = $conexion->query($sqlTransportistaSeleccionado);
                $rowTransportistaSeleccionado = $resTransportistaSeleccionado->fetch_assoc();
                echo "<option selected value='" . $rowTransportistaSeleccionado['TransportistaID'] . "'>" . $rowTransportistaSeleccionado['NombreTransportista'] . "</option>";

                $sqlTransportistas = "SELECT * FROM Transportistas";
                $resTransportistas = $conexion->query($sqlTransportistas);
                while ($filaTransportista = $resTransportistas->fetch_assoc()) {
                    echo "<option value='" . $filaTransportista['TransportistaID'] . "'>" . $filaTransportista['NombreTransportista'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-actions text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save icon"></i> Guardar Cambios</button>
            <a href="../Listados/listado_Pedidos.php" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Regresar</a>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>