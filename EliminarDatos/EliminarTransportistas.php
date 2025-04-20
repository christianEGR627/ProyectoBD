<?php
include("../Config/Conexion.php");
$TransportistaID=$_GET['TransportistaID'];
$sql="DELETE FROM Transportistas WHERE TransportistaID=$TransportistaID";

$query= mysqli_query($conexion,$sql);
if($query){
    header("Location: ../Listados/listado_Transportistas.php");

}
else{
    echo "error al eliminar " . mysqli_error( $conexion );
}
?>