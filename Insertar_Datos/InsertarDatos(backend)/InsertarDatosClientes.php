
<?php
include("../../Config/Conexion.php");

$NombreCliente=$_POST['NombreCliente'];
$NombreContacto=$_POST['NombreContacto'];
$Direccion=$_POST['Direccion'];
$Ciudad=$_POST['Ciudad'];
$CodigoPostal=$_POST['CodigoPostal'];
$Pais=$_POST['Pais'];
$sql="INSERT INTO Clientes(NombreCliente,NombreContacto,Direccion,Ciudad,CodigoPostal,Pais)
VALUES('$NombreCliente','$NombreContacto','$Direccion','$Ciudad','$CodigoPostal','$Pais')";

$resultado= mysqli_query($conexion,$sql);
if($resultado===TRUE)
{
    header("location:../../Listados/listado_Clientes.php");

}
else{
    echo"Datos no insertados";
}


?>
