<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center" style="background: black; color:white">LISTADO  DE EMPLEADOS</h1>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="background: black; color:white">EmpleadoID</th>
                    <th scope="col" style="background: black; color:white">Apellido</th>
                    <th scope="col" style="background: black; color:white"> Nombre</th>
                    <th scope="col" style="background: black; color:white">Fecha de Nacimiento</th>
                    <th scope="col" style="background: black; color:white">Foto</th>
                    <th scope="col" style="background: black; color:white">Notas</th>
                    <th scope="col" style="background: black; color:white">Acciones</th>


                </tr>
            </thead>
            <tbody>
                <?php
                require("../Config/Conexion.php");

                $sql = $conexion->query("SELECT*FROM Empleados");

                while ($resultado = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['EmpleadoID']?></th>
                        <th scope="row"><?php echo $resultado['Apellido']?></th>
                        <th scope="row"><?php echo $resultado['Nombre']?></th>
                        <th scope="row"><?php echo $resultado['FechaNacimiento']?></th>
                        <th scope="row"><?php echo $resultado['Foto']?></th>
                        <th scope="row"><?php echo $resultado['Notas']?></th>
                        <th>
                        <a href="../Editar_Datos/EditarFormEmpleados.php?EmpleadoID=<?php echo $resultado['EmpleadoID']; ?>" class="btn btn-warning">Editar</a>
                        <a href=""class="btn btn-danger">Eliminar</a>
                        </th>
                


                        
                    </tr>



                    <?php



                }


                ?>


               
             
            </tbody>
        </table>
        <div class="container">

        <a href="../Insertar_Datos/AgregarFormEmpleados.php" class="btn btn-success">Agregar Empleado</a>
        </div>




    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>