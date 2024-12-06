<!DOCTYPE HTML>
<html>

<head>
    <title>HERO | Nuestra Historia</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    @vite(['../resources/css/main.css', '../resources/css/modal-styles.css', '../resources/css/animations.css'])
    <style>
    /* Estilos personalizados para el catálogo */
    .catalogo {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px; /* Espaciado mayor entre tarjetas */
        padding: 30px; /* Espaciado alrededor del catálogo */
    }

    .marca {
        width: 300px; /* Aumentar el ancho */
        height: 380px; /* Aumentar la altura */
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Sombra más prominente */
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .marca:hover {
        transform: translateY(-15px) scale(1.1); /* Mayor efecto al pasar el ratón */
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }

    .marca img {
        width: 100%;
        height: 250px; /* Imagen más alta */
        object-fit: cover; /* Asegurar que la imagen se ajuste al tamaño */
    }

    .marca h3 {
        margin: 15px; /* Más espacio alrededor del título */
        text-align: center;
        color: #444;
        font-size: 1.2rem; /* Texto del título más grande */
    }

    .marca p {
        margin: 0 15px 15px; /* Ajuste del espaciado del párrafo */
        text-align: center;
        color: #666;
        font-size: 1rem; /* Texto del párrafo ligeramente más grande */
    }
</style>

</head>

<body class="no-sidebar is-preload">
    <div id="header-wrapper">
        <header class="container">
            @include('components.navbar')
        </header>
    </div>
    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <div class="wrapper style2">
            <div class="inner">
                <div class="container">
                    <div id="content">
                        <!-- Content -->
                        <article>
                            <header class="major">
                                <h2>¡Marcas que manejamos!</h2>
                                <p>Conoce las marcar que utilizamos para la mejora de tu vehiculo.</p>
                            </header>
                            <div class="catalogo">
                                <!-- Marca 1 -->
                                <a href="https://www.sherwin-williams.com" target="_blank"  class="marca">
                                    <div>
                                        <img src="{{ asset('../resources/images/SWP.jpg') }}" alt="Sherwin William">
                                        <h3>Sherwin William</h3>
                                        <p>Innovación en pintura y recubrimientos.</p>
                                    </div>
                                </a>

                                <!-- Marca 2 -->
                                <a href="https://www.3m.com" target="_blank" class="marca">
                                    <div>
                                        <img src="{{ asset('../resources/images/3M.png') }}" alt="3M">
                                        <h3>3M</h3>
                                        <p>Ciencia aplicada a la vida.</p>
                                    </div>
                                </a>

                                <!-- Marca 2 -->
                                <a href="https://sautek.com/omni/" target="_blank" class="marca">
                                    <div>
                                        <img src="{{ asset('../resources/images/omni.jpg') }}" alt="Omni">
                                        <h3>Omni</h3>
                                        <p>Soluciones accesibles y confiables.</p>
                                    </div>
                                </a>

                                <!-- Marca 3 -->
                                <a href="https://diamondpower.com.mx" target="_blank" class="marca">
                                    <div>
                                        <img src="{{ asset('../resources/images/Diamond.jpg') }}" alt="Diamond Power">
                                        <h3>Diamond Power</h3>
                                        <p>Innovación y confianza.</p>
                                    </div>
                                </a>

                                <!-- Marca 4 -->
                                <a href="https://fandeli.com" target="_blank" class="marca">
                                    <div>
                                        <img src="{{ asset('../resources/images/fandeli.jpg') }}" alt="Fandeli">
                                        <h3>Fandeli</h3>
                                        <p>Calidad en abrasivos desde 1927.</p>
                                    </div>
                                </a>

                                <!-- Marca 5 -->
                                <a href="https://www.evercoat.com" target="_blank" class="marca">
                                    <div>
                                        <img src="{{ asset('../resources/images/evercoat.png') }}" alt="Evercoat">
                                        <h3>Evercoat</h3>
                                        <p>Liderazgo en reparación automotriz.</p>
                                    </div>
                                </a>

                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
