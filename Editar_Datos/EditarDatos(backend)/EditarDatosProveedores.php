<?php
include_once("../../Config/Conexion.php");
$ID = $_POST['ID'];
$NombreProveedor=$_POST['NombreProveedor'];
$NombreContacto = $_POST['NombreContacto'];
$Direccion = $_POST['Direccion'];
$Ciudad = $_POST['Ciudad'];
$CodigoPostal = $_POST['CodigoPostal'];
$Pais = $_POST['Pais'];
$Telefono = $_POST['Telefono'];





$sql = "UPDATE Proveedores SET
 NombreProveedor='" . $NombreProveedor . "',
 NombreContacto='" . $NombreContacto . "',
 Direccion='" . $Direccion . "',
 Ciudad='" . $Ciudad . "',
 CodigoPostal='" . $CodigoPostal . "',
 Pais='" . $Pais . "',
 Telefono='" . $Telefono . "'
WHERE ProveedorID = '" . $ID . "'"; 


if ($conexion->query($sql) === TRUE) { 

    header("location:../../Listados/listado_Proveedores.php");

} else {
    echo "Error al actualizar el registro: " . $conexion->error; 
}

$conexion->close(); 
?>