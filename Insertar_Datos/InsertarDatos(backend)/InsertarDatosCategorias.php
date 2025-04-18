<?php
include("../../Config/Conexion.php");

    $NombreCategoria = $_POST["NombreCategoria"];
    $Descripcion = $_POST["Descripcion"];

    echo "NombreCategoria recibido" . $NombreCategoria . "<br>";
    echo "Descripcion Recibida" . $Descripcion . "<br>";

    $sql = "INSERT INTO Categorias(NombreCategoria,Descripcion) VALUES ('$NombreCategoria','$Descripcion') ";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado==true){
        header("location:../../Listados/listado_Categorias.php");

    }else{
        echo "datos no insertados".mysqli_error($conexion);
    } 


?>