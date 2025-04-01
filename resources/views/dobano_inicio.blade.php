<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOBANO - Moda Exclusiva</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">
<!-- Video Background -->
<div class="video-background position-fixed top-0 start-0 w-100 h-100 overflow-hidden z-n1">
    <video autoplay loop muted playsinline class="w-100 h-100 object-fit-cover">
        <source src="{{ asset('img/dob.mp4') }}" type="video/mp4">
    </video>
</div>

<!-- Contenido Principal -->
<div class="content-overlay position-relative z-1 w-100 min-vh-100 d-flex align-items-center justify-content-center text-center text-white bg-dark bg-opacity-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Logo -->
                <img src="{{ asset('img/logo.jpg') }}" class="img-fluid mb-4 rounded-3 shadow" style="max-width: 300px;">

                <!-- Título Principal -->
                <h1 class="display-4 fw-bold mb-4">¡Bienvenidos a <span class="text-warning">DOBANO</span>!</h1>

                <!-- Subtítulo -->
                <p class="lead mb-5">Descubre la mejor moda con descuentos exclusivos.<br>Regístrate o inicia sesión para acceder a nuestro catálogo.</p>

                <!-- Botones de Acción Principales -->
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                    @if(Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-warning btn-lg px-4 py-2">
                            <i class="fas fa-user-plus me-2"></i>Registrarse
                        </a>
                    @endif

                    @if(Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4 py-2">
                            <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                        </a>
                    @endif

                    <a href="{{ url('/empresa') }}" class="btn btn-info btn-lg px-4 py-2">
                        <i class="fas fa-info-circle me-2"></i>Más Información
                    </a>
                </div>

                <!-- Botones de Administración -->
                @auth
                    <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                        <a href="{{ url('/clientes') }}" class="btn btn-success btn-lg px-4 py-2">
                            <i class="fas fa-user-plus me-2"></i>Dar de Alta Cliente
                        </a>
                        <a href="{{ url('/productos') }}" class="btn btn-primary btn-lg px-4 py-2">
                            <i class="fas fa-box me-2"></i>Dar de Alta Producto
                        </a>
                        <a href="{{ url('/dashboard') }}" class="btn btn-secondary btn-lg px-4 py-2">
                            <i class="fas fa-tachometer-alt me-2"></i>Ver Dashboard
                        </a>
                    </div>
                @endauth

                <!-- Muestra de Productos -->
                <div class="row g-4 justify-content-center mt-5">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/camisa3.1.jpg') }}" class="img-thumbnail shadow-lg w-100" alt="Camisa DOBANO">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/chaqueta4.2.jpg') }}" class="img-thumbnail shadow-lg w-100" alt="Chaqueta DOBANO">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('img/pantalon2.1.jpg') }}" class="img-thumbnail shadow-lg w-100" alt="Pantalón DOBANO">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle con Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Scripts personalizados -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
