<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero - Trabajos Realizados</title>
    @vite(['resources/css/main.css', 'resources/css/works_design.css'])
</head>

<body>

    <!-- Encabezado -->
    <div id="header-wrapper">
        <header class="container">
            @include('components.navbar')
        </header>
    </div>
    <!-- Sección de trabajos -->
    <section class="gallery-section">
        <h2>Galería de Trabajos</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="{{ asset('../resources/images/classic_car.jpg') }}" alt="Trabajo 1" class="item-image">
                <p>Restauración completa de auto clásico</p>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('../resources/images/personalizado.png') }}" alt="Trabajo 2" class="item-image">
                <p>Pintura personalizada</p>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('../resources/images/reparacion.jpg') }}" alt="Trabajo 3" class="item-image">
                <p>Reparación de carrocería</p>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('../resources/images/polish.jpg') }}" alt="Trabajo 4" class="item-image">
                <p>Pulido y encerado</p>
            </div>
            <!-- Agrega más elementos según sea necesario -->
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <div class="footer-content">
            <p>&copy; Hero Carrocería y Pintura. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>