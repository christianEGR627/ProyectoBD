<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="conteiner">
        <h1>Categorias</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("../Config/Conexion.php");
                $sql = $conexion->query("SELECT * FROM Categorias");

                if ($sql) {
                    while ($resultado = $sql->fetch_assoc()) {
                        ?>

                        <tr>
                            <th scope="row"><?php echo $resultado['CategoriaID'] ?></th>
                            <th scope="row"><?php echo $resultado['NombreCategoria'] ?></th>
                            <th scope="row"><?php echo $resultado['Descripcion'] ?></th>
                            <th>
                                <a href="">Editar</a>
                                <a href="">Eliminar</a>
                            </th>
                        </tr>

                        <?php

                    }
                } else {
                    echo "Error al ejecutar la consulta" . $conexxion-> error;
                }


                ?>


            </tbody>
        </table>


    </div>

    <div class="contaier">
                <a href="../Insertar_Datos/AgregarFromCategorias.php">Agregar Categoria</a>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>