<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../CSS/estilos_tablas.css">
</head>

<body>
    <div class="container">
        <h1 class="page-title text-center">Clientes</h1>
    </div>
    <div class="container mt-3">
        <div class="text-center">
            <a href="../index.php" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Regresar a
                Principal</a>
        </div>
    </div>

    <div class="container">
        <div class="">
            <div class="add-button-container">
                <a href="../Insertar_Datos/AgregarFormClientes.php" class="add-button">
                    <i class="fas fa-plus icon"></i> Agregar Cliente
                </a>
            </div>
        </div>
        <div class="table-wrapper">
            <table id="clientes-table" class="display">
                <thead>
                    <tr>
                        <th>ClienteID</th>
                        <th>Nombre del Cliente</th>
                        <th>Nombre del Contacto</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Codigo Postal</th>
                        <th>Pais</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require("../Config/Conexion.php");
                    $sql = $conexion->query("SELECT * FROM Clientes");
                    while ($resultado = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $resultado['ClienteID'] ?></td>
                            <td><?php echo $resultado['NombreCliente'] ?></td>
                            <td><?php echo $resultado['NombreContacto'] ?></td>
                            <td><?php echo $resultado['Direccion'] ?></td>
                            <td><?php echo $resultado['Ciudad'] ?></td>
                            <td><?php echo $resultado['CodigoPostal'] ?></td>
                            <td><?php echo $resultado['Pais'] ?></td>
                            <td>
                                <div class="btn-actions">
                                    <a href="../Editar_Datos/EditarFormClientes.php? ClienteID=<?php echo $resultado['ClienteID'] ?>"
                                        class="btn-action btn-edit"><i class="fas fa-edit"></i> Editar</a>
                                    <a href="../EliminarDatos/EliminarClientes.php? ClienteID=<?php echo $resultado['ClienteID'] ?>"
                                        class="btn-action btn-delete"><i class="fas fa-trash-alt"></i> Eliminar</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#clientes-table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-MX.json"
                },
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "Todos"]
                ],
                "order": [
                    [0, "asc"]
                ],
                "search": {
                    "caseInsensitive": true
                }
            });
        });
    </script>
</body>

</html>