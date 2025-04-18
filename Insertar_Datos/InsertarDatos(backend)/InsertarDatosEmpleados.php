
<?php
include("../../Config/Conexion.php");

$Apellido=$_POST['Apellido'];
$Nombre=$_POST['Nombre'];
$FechaNacimiento=$_POST['FechaNacimiento'];
$Foto=$_POST['Foto'];
$Notas=$_POST['Notas'];
$sql="INSERT INTO Empleados(Apellido,Nombre,FechaNacimiento,Foto,Notas)
VALUES('$Apellido','$Nombre','$FechaNacimiento','$Foto','$Notas')";

$resultado= mysqli_query($conexion,$sql);
if($resultado===TRUE)
{
    header("location:../../Listados/listado_Empleados.php");

}
else{
    echo"Datos no insertados";
}





?>