
<?php
include_once("../../Config/Conexion.php");

$PedidoID = $_POST['PedidoID'];
$NombreCliente = $_POST['NombreCliente'];
$Nombre = $_POST['Nombre'];
$FechaPedido = $_POST['FechaPedido'];
$NombreTransportista = $_POST['NombreTransportista'];
$sql = "UPDATE  Pedidos SET 
ClienteID='" . $NombreCliente . "',
EmpleadoID='" . $Nombre . "',
FechaPedido='" . $FechaPedido . "',
TransportistaID='" . $NombreTransportista . "'
WHERE PedidoID='" . $PedidoID . "'
";
if ($conexion->query($sql)) {
    header("location:../../Listados/listado_Pedidos.php");

}
?>