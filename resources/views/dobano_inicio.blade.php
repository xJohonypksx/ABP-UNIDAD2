<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOBANO - Moda Exclusiva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="video-background position-fixed top-0 start-0 w-100 h-100 overflow-hidden z-n1">
    <video autoplay loop muted playsinline class="w-100 h-100 object-fit-cover">
        <source src="{{ asset('img/dob.mp4') }}" type="video/mp4">
    </video>
</div>
<div class="content-overlay position-relative z-1 w-100 min-vh-100 d-flex align-items-center justify-content-center text-center text-white bg-dark bg-opacity-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Logo -->
                <img src="{{ asset('img/logo.jpg') }}" class="img-fluid mb-4 rounded-3 shadow" style="max-width: 300px;">
                <h1 class="display-4 fw-bold mb-4">¡Bienvenidos a <span class="text-warning">DOBANO</span>!</h1>
                <p class="lead mb-5">Descubre la mejor moda con descuentos exclusivos.<br>Regístrate o inicia sesión para acceder a nuestro catálogo.</p>
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
                </div>
                @auth
                    <div class="accordion mb-5" id="adminAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Información de Administración
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#adminAccordion">
                                <div class="accordion-body">
                                    <div class="d-flex flex-wrap justify-content-start gap-3">
                                        <a href="{{ url('/dashboard') }}" class="btn btn-dark btn-lg px-4 py-2">
                                            <i class="fas fa-tachometer-alt me-2"></i>Ver Dashboard
                                        </a>
                                        <a href="{{ route('personas.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-users me-2"></i>Ver Personas
                                        </a>
                                        <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-user-plus me-2"></i>Ver Clientes
                                        </a>
                                        <a href="{{ route('inventarios.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-cogs me-2"></i>Ver Inventarios
                                        </a>
                                        <a href="{{ route('pagos.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-credit-card me-2"></i>Ver Pagos
                                        </a>
                                        <a href="{{ route('productos.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-box me-2"></i>Ver Productos
                                        </a>
                                        <a href="{{ route('proveedores.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-truck me-2"></i>Ver Proveedores
                                        </a>
                                        <a href="{{ route('tickets.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-ticket-alt me-2"></i>Ver Tickets
                                        </a>
                                        <a href="{{ route('vendedores.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-users me-2"></i>Ver Vendedores
                                        </a>
                                        <a href="{{ route('ventas.index') }}" class="btn btn-primary btn-lg px-4 py-2">
                                            <i class="fas fa-shopping-cart me-2"></i>Ver Ventas
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Scripts personalizados -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



