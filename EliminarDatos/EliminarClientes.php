<?php
include("../Config/Conexion.php");
$ClienteID=$_GET['ClienteID'];
$sql="DELETE FROM Clientes WHERE ClienteID=$ClienteID";

$query= mysqli_query($conexion,$sql);
if($query){
    header("Location: ../Listados/listado_Clientes.php");

}
else{
    echo "error al eliminar " . mysqli_error( $conexion );
}
?>