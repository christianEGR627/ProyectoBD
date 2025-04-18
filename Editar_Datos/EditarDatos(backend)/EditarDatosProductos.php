<?php
include_once("../../Config/Conexion.php");
$ID = $_POST['ID'];
$NombreProducto=$_POST['NombreProducto'];
$Proveedor = $_POST['Proveedor'];
$Categoria = $_POST['Categoria'];
$Unidad = $_POST['Unidad'];
$Precio = $_POST['Precio'];



$sql = "UPDATE Productos SET
 NombreProducto='" . $NombreProducto . "',
 ProveedorID='" . $Proveedor . "',
 CategoriaID='" . $Categoria . "',
 Unidad='" . $Unidad . "',
 Precio='" . $Precio . "'
WHERE ProductoID = '" . $ID . "'"; 


if ($conexion->query($sql) === TRUE) { 

    header("location:../../Listados/listado_Productos.php");

} else {
    echo "Error al actualizar el registro: " . $conexion->error; 
}

$conexion->close(); 
?>