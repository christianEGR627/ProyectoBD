<?php
include_once("../../Config/Conexion.php");

$EmpleadoID = $_POST['EmpleadoID'];
$Apellido = $_POST['Apellido'];
$Nombre = $_POST['Nombre'];
$FechaNacimiento = $_POST['FechaNacimiento'];
$Foto = $_POST['Foto'];
$Notas = $_POST['Notas'];
$sql = "UPDATE  Empleados SET 
Apellido='" . $Apellido . "',
Nombre='" . $Nombre . "',
FechaNacimiento='" . $FechaNacimiento . "',
Foto='" . $Foto . "',
Notas='" . $Notas . "'
WHERE EmpleadoID='" . $EmpleadoID . "'
";

if ($conexion->query($sql)) {
    header("location:../../Listados/listado_Empleados.php");

}





?>