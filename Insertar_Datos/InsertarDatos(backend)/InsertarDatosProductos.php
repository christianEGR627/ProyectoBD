<?php
    include("../../Config/Conexion.php");
    $NombreProducto = $_POST["Nombre"];
    $Proveedor = $_POST["ProveedorP"];
    $Categoria = $_POST["CategoriaP"];
    $Unidad = $_POST["Unidad"];
    $Precio = $_POST["Precio"];

    $sql = "INSERT INTO Productos(NombreProducto,ProveedorID,CategoriaID,Unidad,Precio) 
            VALUES('$NombreProducto','$Proveedor','$Categoria','$Unidad','$Precio')";

    $resultado = mysqli_query($conexion, $sql);
    if($resultado == true){
        header("location:../../Listados/listado_Productos.php");

    }else{
        echo "datos no insertados". mysqli_error($conexion);

    }
?>