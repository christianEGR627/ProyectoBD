<?php
include_once("../../Config/Conexion.php");

$ClienteID = $_POST['ClienteID'];
$NombreCliente = $_POST['NombreCliente'];
$NombreContacto = $_POST['NombreContacto'];
$Direccion = $_POST['Direccion'];
$Ciudad = $_POST['Ciudad'];
$CodigoPostal = $_POST['CodigoPostal'];
$Pais = $_POST['Pais'];

$sql = "UPDATE Clientes SET
    NombreCliente='" . $NombreCliente . "',
    NombreContacto='" . $NombreContacto . "',
    Direccion='" . $Direccion . "',
    Ciudad='" . $Ciudad . "',
    CodigoPostal='" . $CodigoPostal . "',
    Pais='" . $Pais . "'
    WHERE ClienteID='" . $ClienteID . "'";

if ($conexion->query($sql)) {
    header("Location: ../../Listados/listado_Clientes.php");
}
?>
