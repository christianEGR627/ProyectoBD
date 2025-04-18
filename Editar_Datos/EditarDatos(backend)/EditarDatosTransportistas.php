
<?php
include_once("../../Config/Conexion.php");
$TransportistaID=$_POST['TransportistaID'];
$NombreTransportista=$_POST['NombreTransportista'];
$Telefono=$_POST['Telefono'];
$sql=" UPDATE Transportistas SET
NombreTransportista='".$NombreTransportista."',
Telefono='".$Telefono."'
WHERE TransportistaID='".$TransportistaID."'

";
if ($conexion->query($sql)) {
    header("Location: ../../Listados/listado_Transportistas.php");
}





?>