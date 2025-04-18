<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center" style="background-color: black; color: white; border-radius: 5px;">
            Editar Categorias</h1>
        <br>
    </div>

    <form class="container" action="EditarDatos(backend)/EditarDatosCategorias.php" method="post">
    <?php
        include_once('../Config/Conexion.php');
        $sql = "SELECT * FROM  Categorias WHERE CategoriaID =" . $_REQUEST['idCategoria'];
        $resultado = $conexion->query($sql);
        $row = $resultado->fetch_assoc();
        ?>

        <input type="hidden" class="form-control" name="ID" value="<?php echo $row['CategoriaID'] ?>">

        <div class="mb-3">
            <label class="form-label">NombreCategoria</label>
            <input type="text" class="form-control" name="NombreCategoria" value="<?php echo $row['NombreCategoria'] ?>">

        </div>
        <br>
        


        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="<?php echo $row['Descripcion'] ?>">

        </div>


        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../Listados/listado_Categorias.php" class="btn btn-dark">Regresar</a>
        </div>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>