<?php
include("../Config/Conexion.php");
$ProductoID=$_GET['ProductoID'];
$sql="DELETE FROM Productos WHERE ProductoID=$ProductoID";

$query= mysqli_query($conexion,$sql);
if($query){
    header("Location: ../Listados/listado_Productos.php");

}
else{
    echo "error al eliminar " . mysqli_error( $conexion );
}
?>