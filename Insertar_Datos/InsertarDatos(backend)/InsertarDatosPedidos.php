<?php
include("../../Config/Conexion.php");

$NombreCliente = $_POST['NombreCliente'];
$NombreEmpleado = $_POST['NombreEmpleado'];
$FechaPedido = $_POST['FechaPedido'];
$NombreTransportista = $_POST['NombreTransportista'];
$sql = "INSERT INTO Pedidos(ClienteID,EmpleadoID,FechaPedido,TransportistaID)
VALUES('$NombreCliente','$NombreEmpleado','$FechaPedido','$NombreTransportista')";

$resultado = mysqli_query($conexion, $sql);
if ($resultado === TRUE) {
    header("location:../../Listados/listado_Pedidos.php");

} else {
    echo "Datos no insertados";
}




?>