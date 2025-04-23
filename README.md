# Código HTML de la Página Principal

Este documento describe la estructura y el propósito del código HTML para la página principal de la aplicación "Viento del Norte".

# Metadatos del Documento (`<head>`)

La sección `<head>` contiene información sobre el documento HTML...

```html
<meta charset="utf-8">
```
Define la codificación de caracteres del documento como UTF-8, que soporta la mayoría de los caracteres.

```html
<meta name="viewport" content="width=device-width, initial-scale=1">
```
Configura la ventana gráfica para que se ajuste al ancho del dispositivo y establece el nivel de zoom inicial en 1.

```html
<title>Página Principal</title>
```
Define el título que aparece en la pestaña del navegador.

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" ...>
```
Enlaza la hoja de estilos de Bootstrap para aplicar estilos predefinidos y facilitar el diseño responsivo.

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
```
Enlazan la fuente "Inter" de Google Fonts para utilizarla en el texto de la página.

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
```
Enlaza la biblioteca de iconos Font Awesome para utilizar iconos en la página.

```html
<link rel="stylesheet" href="CSS/estilos_principal.css">
```
Enlaza una hoja de estilos personalizada (estilos_principal.css) para aplicar estilos específicos de esta página.

# Contenido del Cuerpo (`<body>`)
La sección <`body`> contiene el contenido visible de la página principal...

```html
<body>
    <div class="background-gradient"></div>
    <div class="container">
        <h1 class="text-center text-white mb-4">Viento del Norte</h1>
        <div class="module-grid">
            <div class="module-card">
                <i class="fas fa-box module-icon"></i>
                <h3 class="module-title">Productos</h3>
                <p class="module-description">Gestiona el catálogo de tus productos, precios e inventario.</p>
                <a href="Listados/listado_Productos.php" class="module-link">
                    Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i>
                </a>
            </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" ...></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
```
<`div class="background-gradient"></div`> Un div utilizado para aplicar un fondo con degradado a la página mediante CSS.

<`div class="container"`>: Un div de Bootstrap que centra el contenido de la página y le aplica un ancho máximo.

<`h1 class="text-center text-white mb-4">Viento del Norte</h1`> Un encabezado de nivel 1 que muestra el título de la aplicación, centrado, con texto blanco y un margen inferior.

# Módulos de la Aplicación (`<div class="module-grid">`)
Este div contiene los diferentes módulos o secciones principales de la aplicación...




```html
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
    </div>
```
Cada tarjeta de módulo (.module-card) sigue una estructura similar...

`<i class="fas fa-box module-icon"></i>` Un icono de Font Awesome que representa el módulo

`<h3 class="module-title">Productos</h3>` El título del módulo.

`<p class="module-description">Gestiona el catálogo de tus productos, precios e inventario.</p>` Una breve descripción de la funcionalidad del módulo.

`<a href="Listados/listado_Productos.php" class="module-link">Ver Detalles <i class="fas fa-arrow-right arrow-icon"></i></a>` Un enlace a la página de listado o gestión del módulo

## Los módulos incluidos son:

* Productos: Enlace a Listados/listado_Productos.php.
* Proveedores: Enlace a Listados/listado_Proveedores.php.
* Categorías: Enlace a Listados/listado_Categorias.php.
* Clientes: Enlace a Listados/listado_Clientes.php.
* Empleados: Enlace a Listados/listado_Empleados.php.
* Transportistas: Enlace a Listados/listado_Transportistas.php.
* Pedidos: Enlace a Listados/listado_Pedidos.php.
* Detalles de Pedido: Enlace a Listados/listado_DetallesPedido.php.
* Ventas: Enlace a #.
* Inventario: Enlace a #.
* Configuración: Enlace a #.

# Scripts (`<script>`)
La sección de scripts al final del <`body`> incluye archivos JavaScript externos.


```html
<script src="[https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js](https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js)"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
<script src="[https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js)"></script>
```

`<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" ...></script>` Incluye el bundle de JavaScript de Bootstrap, que proporciona funcionalidades interactivas y componentes dinámicos.

`<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>`  Incluye la biblioteca de JavaScript de Font Awesome, necesaria para que los iconos se visualicen correctamente.



```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

```html
```

``

``

``

``

``

``

``