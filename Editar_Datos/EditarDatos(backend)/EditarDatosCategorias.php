<?php
include_once("../../Config/Conexion.php");
$ID = $_POST['ID'];
$NombreCategoria=$_POST['NombreCategoria'];
$Descripcion = $_POST['Descripcion'];




$sql = "UPDATE Categorias SET
 NombreCategoria='" . $NombreCategoria . "',
 Descripcion='" . $Descripcion . "'
WHERE CategoriaID = '" . $ID . "'"; 


if ($conexion->query($sql) === TRUE) { 

    header("location:../../Listados/listado_Categorias.php");

} else {
    echo "Error al actualizar el registro: " . $conexion->error; 
}

$conexion->close(); 
?>