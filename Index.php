<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body {
            background-color: #121212; /* Fondo oscuro */
            color: #f5f5f5; /* Texto claro */
            font-family: 'Inter', sans-serif;
            overflow: hidden; /* Para la animación de fondo */
        }

        .background-gradient {
            position: fixed;
            top: 0;
            left: 0;
            width: 200vw;
            height: 200vh;
            background: linear-gradient(45deg, #4a148c, #2e7d32, #d84315, #1976d2);
            background-size: 400% 400%;
            animation: gradientAnimation 15s infinite alternate;
            z-index: -1;
            filter: blur(80px);
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 40px;
        }

        .module-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            width: 90%;
            max-width: 1200px;
        }

        .module-card {
            background-color: rgba(255, 255, 255, 0.08); /* Tarjetas semi-transparentes */
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease-in-out;
            backdrop-filter: blur(10px); /* Efecto de vidrio */
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .module-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.4);
        }

        .module-icon {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #aeea00; /* Verde lima brillante */
            opacity: 0.8;
            transition: transform 0.2s ease-in-out;
        }

        .module-card:hover .module-icon {
            transform: scale(1.1);
            opacity: 1;
        }

        .module-title {
            font-size: 1.5em;
            font-weight: 500;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
            color: #f5f5f5;
        }

        .module-description {
            font-size: 0.9em;
            color: #bdbdbd;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .module-link {
            display: inline-flex;
            align-items: center;
            color: #aeea00;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s ease-in-out, color 0.2s ease-in-out;
        }

        .module-link:hover {
            transform: translateX(5px);
            color: #ccff90;
        }

        .module-link .arrow-icon {
            margin-left: 8px;
            font-size: 0.8em;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="background-gradient"></div>
    <div class="container">
        <div class="module-grid">
            <div class="module-card">
                <i class="fas fa-box module-icon"></i>
                <h3 class="module-title">Productos</h3>
                <p class="module-description">Gestiona el catálogo de tus productos, precios e inventario.</p>
                <a href="Listados/listado_Productos.php" class="module-link">
                    Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
            <div class="module-card">
                <i class="fas fa-truck module-icon"></i>
                <h3 class="module-title">Proveedores</h3>
                <p class="module-description">Administra la información de tus proveedores y sus contactos.</p>
                <a href="Listados/listado_Proveedores.php" class="module-link">
                    Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
            <div class="module-card">
                <i class="fas fa-tags module-icon"></i>
                <h3 class="module-title">Categorías</h3>
                <p class="module-description">Organiza tus productos en categorías para una mejor navegación.</p>
                <a href="Listados/listado_Categorias.php" class="module-link">
                    Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
            <div class="module-card">
                <i class="fas fa-chart-line module-icon"></i>
                <h3 class="module-title">Ventas</h3>
                <p class="module-description">Realiza un seguimiento de tus ventas, genera informes y analiza tendencias.</p>
                <a href="#" class="module-link">
                    Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
            <div class="module-card">
                <i class="fas fa-cubes module-icon"></i>
                <h3 class="module-title">Inventario</h3>
                <p class="module-description">Controla el stock de tus productos y recibe alertas de inventario bajo.</p>
                <a href="#" class="module-link">
                    Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
            <div class="module-card">
                <i class="fas fa-sliders-h module-icon"></i>
                <h3 class="module-title">Configuración</h3>
                <p class="module-description">Personaliza la configuración de tu sistema y gestiona usuarios.</p>
                <a href="#" class="module-link">
                    Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>