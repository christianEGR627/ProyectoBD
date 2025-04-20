<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar Pedidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>

</html>

<body>
  <br>
  <h1 class="text-center" style="background: black; color:white"> EDITAR PEDIDOS</h1>

  <form class="container" action="EditarDatos(backend)/EditarDatosPedidos.php" method="post">
    <?php
    include_once('../Config/Conexion.php');
    $sql = "SELECT * FROM Pedidos WHERE PedidoID=" . $_REQUEST['PedidoID'];
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();
    ?>
    <input type="Hidden" class="form-control" name="PedidoID" value="<?php echo $row['PedidoID']; ?>">


    <label for="">Nombre del Cliente</label>
    <select class="form-select mb-3" aria-label="Default select example" name="NombreCliente">
      <option selected disabled>--Seleccione un Cliente--</option>
      <?php
      include("../Config/Conexion.php");
      $sql1 = "SELECT *FROM  Clientes WHERE ClienteID=" . $row['ClienteID'];
      $resultado1 = $conexion->query($sql1);
      $row1 = $resultado1->fetch_assoc();
      echo "<option  selected value='" . $row1['ClienteID'] . "'>" . $row1['NombreCliente'] . "</option>";
      $sql2 = "SELECT* FROM Clientes";
      $resultado2 = $conexion->query($sql2);
      while ($Fila = $resultado2->fetch_array()) {
        echo "<option  value='" . $Fila['ClienteID'] . "'>" . $Fila['NombreCliente'] . "</option>";
      }
      ?>

    </select>

    <label for="">Nombre del Empleado</label>
    <select class="form-select mb-3" aria-label="Default select example" name="Nombre">
      <option selected disabled>--Seleccione un Empleado--</option>
      <?php
      include("../Config/Conexion.php");

      $sql3 = "SELECT * FROM Empleados WHERE EmpleadoID = " . $row['EmpleadoID'];
      $resultado3 = $conexion->query($sql3);
      $row3 = $resultado3->fetch_assoc();
      echo "<option selected value='" . $row3['EmpleadoID'] . "'>" . $row3['Nombre'] . "</option>";

      $sql4 = "SELECT * FROM Empleados";
      $resultado4 = $conexion->query($sql4);
      while ($fila4 = $resultado4->fetch_array()) {
        echo "<option value='" . $fila4['EmpleadoID'] . "'>" . $fila4['Nombre'] . "</option>";
      }
      ?>
    </select>


    <div class="mb-3">
      <label class="form-label">Fecha del Pedido</label>
      <input type="Date" class="form-control" name="FechaPedido" value="<?php echo $row['FechaPedido']; ?>">
    </div>

    <label for="">Nombre del Transportista</label>
    <select class="form-select mb-3" aria-label="Default select example" name="NombreTransportista">
      <option selected disabled>--Seleccione un Transportista--</option>
      <?php
      include("../Config/Conexion.php");

      $sqlTransportistaSel = "SELECT * FROM Transportistas WHERE TransportistaID = " . $row['TransportistaID'];
      $resTransportistaSel = $conexion->query($sqlTransportistaSel);
      $rowTransportistaSel = $resTransportistaSel->fetch_assoc();
      echo "<option selected value='" . $rowTransportistaSel['TransportistaID'] . "'>" . $rowTransportistaSel['NombreTransportista'] . "</option>";

      $sqlTransportistas = "SELECT * FROM Transportistas";
      $resTransportistas = $conexion->query($sqlTransportistas);
      while ($filaTransportista = $resTransportistas->fetch_assoc()) {
        echo "<option value='" . $filaTransportista['TransportistaID'] . "'>" . $filaTransportista['NombreTransportista'] . "</option>";
      }
      ?>
    </select>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="../Listados/listado_Pedidos.php" class="btn btn-dark">Regresar</a>

  </form>





</body>