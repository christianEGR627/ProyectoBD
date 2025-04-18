<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center" style="background-color: black; color: white; border-radius: 5px;">
            Editar Productos</h1>
        <br>
    </div>

    <form class="container" action="EditarDatos(backend)/EditarDatosProductos.php" method="post">
        <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM  Productos WHERE ProductoID =" . $_REQUEST['idProducto'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>

        <input type="hidden" class="form-control" name="ID" value="<?php echo $row['ProductoID'] ?>">

        <div class="mb-3">
            <label class="form-label">Nombre Producto</label>
            <input type="text" class="form-control" name="NombreProducto" value="<?php echo $row['NombreProducto'] ?>">

        </div>
        <br>

        <!--TRAER DATOS PROVEEDOR-->
        <label>Proveedores</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Proveedor">
            <option selected>--Seleccione Proveedor--</option>
            <?php 
            include("../Config/Conexion.php");
            $sql1="SELECT * FROM Proveedores WHERE ProveedorID =" .$row['ProveedorID'];
            $resultado1 = $conexion->query($sql1);
            $row1 = $resultado1->fetch_assoc();
            echo "<option selected value='" . $row1['ProveedorID'] . "'>" . $row1['NombreProveedor'] . "</option>";
            
            $sql2 = "SELECT * FROM Proveedores";
            $resultado2 = $conexion->query($sql2);
            while($Fila = $resultado2->fetch_assoc()){
                echo "<option value='" . $Fila['ProveedorID'] . "'>" . $Fila['NombreProveedor'] . "</option>";
            }
            ?>
        </select>




        <!--TRAER DATOS CATEGORIA-->
        <label>Categorias</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Categoria">
            <option selected>--Seleccione Categoria--</option>
            <?php 
            include("../Config/Conexion.php");
            $sql3="SELECT * FROM Categorias WHERE CategoriaID =" .$row['CategoriaID'];
            $resultado3 = $conexion->query($sql3);
            $row3 = $resultado3->fetch_assoc();
            echo "<option selected value='" . $row3['CategoriaID'] . "'>" . $row3['NombreCategoria'] . "</option>";
            
            $sql4 = "SELECT * FROM Categorias";
            $resultado4 = $conexion->query($sql4);
            while($Fila = $resultado4->fetch_assoc()){
                echo "<option value='" . $Fila['CategoriaID'] . "'>" . $Fila['NombreCategoria'] . "</option>";
            }
            ?>
        </select>


        <div class="mb-3">
            <label class="form-label">Unidad</label>
            <input type="text" class="form-control" name="Unidad" value="<?php echo $row['Unidad'] ?>">

        </div>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="Precio" value="<?php echo $row['Precio'] ?>">
        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger" >Agregar</button>
            <a href="../Listados/listado_Productos.php" class="btn btn-dark">Regresar</a>
        </div>


    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>