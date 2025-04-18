<?php
include("../../Config/Conexion.php");

$NombreTransportista = $_POST['NombreTransportista'];
$Telefono = $_POST['Telefono'];
$sql = "INSERT INTO Transportistas(NombreTransportista,Telefono) VALUES('$NombreTransportista','$Telefono')";

$resultado = mysqli_query($conexion, $sql);
if ($resultado === TRUE) {
    header("location:../../Listados/listado_Transportistas.php");

} else {
    echo "Datos no insertados";
}

?>