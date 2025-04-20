<?php
include("../Config/Conexion.php");
$EmpleadoID=$_GET['EmpleadoID'];
$sql="DELETE FROM Empleados WHERE EmpleadoID=$EmpleadoID";

$query= mysqli_query($conexion,$sql);
if($query){
    header("Location: ../Listados/listado_Empleados.php");

}
else{
    echo "error al eliminar " . mysqli_error( $conexion );
}
?>