<?php
    include("../Config/Conexion.php");
    $ID = $_GET["idProveedor"];
    $sql = "DELETE FROM Proveedores WHERE ProveedorID = $ID";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location:../Listados/listado_Proveedores.php");
        exit();
    } else {
        echo "Error al eliminar la categoría: " . mysqli_error($conexion);
    }
?>