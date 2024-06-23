<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Arriendos de Vehículos</title>
    <style>
        /* Estilos CSS (personaliza según tus preferencias) */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Empresa de Arriendo de Autos</h1>
        <!-- Otros elementos del encabezado común (menú, logo, etc.) -->
    </header>
    <div class="content">
        @yield('content') <!-- Aquí se insertará el contenido específico de cada vista -->
    </div>
    <footer>
        <p>Derechos reservados © {{ date('Y') }}</p>
        <!-- Otros elementos del pie de página común (enlaces, información legal, etc.) -->
    </footer>
</body>
</html>
