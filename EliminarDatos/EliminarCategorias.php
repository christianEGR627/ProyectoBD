<?php
    include("../Config/Conexion.php");
    $ID = $_GET["idCategoria"];
    $sql = "DELETE FROM Categorias WHERE CategoriaID = $ID";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location:../Listados/listado_Categorias.php");
        exit();
    } else {
        echo "Error al eliminar la categoría: " . mysqli_error($conexion);
    }
?>