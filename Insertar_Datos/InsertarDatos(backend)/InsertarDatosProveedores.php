<?php
include("../../Config/Conexion.php");

    $NombreProveedor = $_POST["NombreProveedor"];
    $NombreContacto = $_POST["NombreContacto"];
    $Direccion = $_POST["Direccion"];
    $Ciudad = $_POST["Ciudad"];
    $CodigoPostal = $_POST["CodigoPostal"];
    $Pais = $_POST["Pais"];
    $Telefono = $_POST["Telefono"];

    echo "Nombre del Proveedor recibido" . $NombreProveedor . "<br>";
    echo "Nombre del contacto recibido" . $NombreContacto . "<br>";
    echo "Direccion recibida" . $Direccion . "<br>";
    echo "Ciudad recibida" . $Ciudad . "<br>";
    echo "Codigo postal recobido" . $CodigoPostal . "<br>";
    echo "Pais recibido" . $Pais . "<br>";
    echo "telefono recibido" . $Telefono . "<br>";

    $sql = "INSERT INTO Proveedores(NombreProveedor,NombreContacto,Direccion,Ciudad,CodigoPostal,Pais,Telefono)
             VALUES ('$NombreProveedor','$NombreContacto','$Direccion','$Ciudad','$CodigoPostal','$Pais','$Telefono')";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado==true){
        header("location:../../Listados/listado_Proveedores.php");

    }else{
        echo "datos no insertados".mysqli_error($conexion);
    } 


?>