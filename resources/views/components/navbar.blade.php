<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['../resources/css/main.css', '../resources/css/modal-styles.css', '../resources/css/animations.css'])
    
</head>

<body>
    <header id="header">
        <div class="inner">
            <div class="cotainer">
                <!-- Logo -->
                <h1><a href="{{ route('home') }}" id="logo">HERO</a></h1>
                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li class="{{ request()->routeIs('home') ? 'current_page_item' : '' }}">
                            <a href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="{{ request()->is('trabajos*') ? 'current_page_item' : '' }}">
                            
                            <ul>
                                <li><a href="#">Pintura</a></li>
                                <li><a href="#">Ojalatería</a></li>
                                <li>
                                    <a href="#">Reparaciones</a>
                                    <ul>
                                        <li><a href="#">Choques</a></li>
                                        <li><a href="#">Abolladuras</a></li>
                                        <li><a href="#">Enmacillado</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('formularioView') ? 'current_page_item' : '' }}">
                            <a href="{{ route('formularioView')}}">Agendar cita</a>
                        </li>
                        <li class="{{ request()->routeIs('portfolio') ? 'current_page_item' : '' }}">
                            <a href="{{ route('portfolio') }}">Galería de trabajos</a>
                        </li>
                        <li class="{{ request()->routeIs('brandsView') ? 'current_page_item' : '' }}">
                            <a href="{{ route('brandsView') }}">Marcas</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>