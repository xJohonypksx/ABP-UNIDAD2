<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - Mi Marca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg,rgb(48, 48, 48),rgb(151, 151, 151));
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .btn-primary {
            background-color: #ff6b81;
            border: none;
        }
        .btn-primary:hover {
            background-color: #ff4757;
        }
        .logo {
            width: 80px;
            height: auto;
        }
        .header-title {
            font-size: 2rem;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>
<!-- Encabezado con Logo -->
<header class="bg-dark py-3 text-center">
    <img src="img/logo.jpg" alt="Logo de Mi Marca" class="logo">
    <h1 class="header-title">DOBANO</h1>
</header>

<div class="container mt-4">
    <div class="row">
        <!-- Barra lateral de categorías -->
        <div class="col-md-3">
            <h5 class="fw-secondary">Categorías</h5>
            <ul class="list-group">
                <li class="list-group-item">Mujeres</li>
                <li class="list-group-item">Hombres </li>
                <li class="list-group-item">Niñas</li>
                <li class="list-group-item">Niños</li>
            </ul>
        </div>

        <!-- Sección de productos -->
        <div class="col-md-9">
            <div class="row">
                <script>
                    const productos = [
                        { img: "img/chaqueta.jpg", categoria: "Chamarra", titulo: "blanco y negro", precioAntes: "$790.00", precioAhora: "$395.00", descuento: "-50%" },
                        { img: "img/pantalon1.jpg", categoria: "Jeans", titulo: "Blanco y Negro", precioAntes: "$1200.00", precioAhora: "$840.00", descuento: "-30%" },
                        { img: "img/camisa1.jpg", categoria: "Playera", titulo: "Blanco y Negro", precioAntes: "", precioAhora: "$25.00", descuento: "-40%" },
                        { img: "img/pantalon2.jpg", categoria: "Jeans", titulo: "Blanco y Negro", precioAntes: "$850.00", precioAhora: "$425.00", descuento: "-50%" },
                        { img: "img/pantalon2.1.jpg", categoria: "Jeans", titulo: "Blanco y Negro", precioAntes: "$900.00", precioAhora: "$450.00", descuento: "-50%" },
                        { img: "img/pantalon2.2.jpg", categoria: "Jeans", titulo: "Blanco y Negro", precioAntes: "$1100.00", precioAhora: "$770.00", descuento: "-30%" },
                        { img: "img/camisa3.1.jpg", categoria: "Playera", titulo: "blak modern", precioAntes: "$1000.00", precioAhora: "$500.00", descuento: "-50%" },
                        { img: "img/camisa3.2.jpg", categoria: "Playera", titulo: "Wig Cap", precioAntes: "", precioAhora: "$80.00", descuento: "" },
                        { img: "img/camisa3.3.jpg", categoria: "Playera", titulo: "White suit", precioAntes: "$1300.00", precioAhora: "$910.00", descuento: "-30%" },
                        { img: "img/chaqueta4.1.jpg", categoria: "Chaqueta", titulo: "Modern Cool", precioAntes: "$1150.00", precioAhora: "$805.00", descuento: "-30%" },
                        { img: "img/chaqueta4.2.jpg", categoria: "Chaqueta", titulo: "Blak Shet", precioAntes: "$870.00", precioAhora: "$435.00", descuento: "-50%" },
                        { img: "img/chaqueta4.3.jpg", categoria: "Chaqueta", titulo: "Close blak", precioAntes: "", precioAhora: "$20.00", descuento: "" }
                    ];

                    document.write(productos.map(producto => `
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="position-relative">
                                        <img src="${producto.img}" class="card-img-top" alt="${producto.titulo}">
                                        ${producto.descuento ? `<span class="badge bg-danger position-absolute top-0 start-0 m-2">${producto.descuento}</span>` : ''}
                                    </div>
                                    <div class="card-body text-center">
                                        <p class="text-muted mb-1">${producto.categoria}</p>
                                        <h5 class="card-title fw-bold">${producto.titulo}</h5>
                                        <p class="card-text">
                                            ${producto.precioAntes ? `<span class="text-decoration-line-through text-muted">${producto.precioAntes}</span>` : ''}
                                            <span class="fw-bold text-danger">${producto.precioAhora}</span>
                                        </p>
                                        <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                    </div>
                                </div>
                            </div>
                        `).join(''));
                </script>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<footer class="bg-black text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Columna de Catálogo -->
            <div class="col-md-4">
                <h5 class="fw-bold">CATÁLOGO</h5>
                <hr class="border-secondary w-25">
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Ivierno</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Primavera</a></li>
                    <li><a href="#" class="text-white text-decoration-none">City Cool</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Otoño</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Vernao</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Mujer</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Hombre ♂</a></li>
                </ul>
            </div>

            <!-- Columna de Supreme -->
            <div class="col-md-4">
                <h5 class="fw-bold">Dobano</h5>
                <hr class="border-secondary w-25">
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Nuestra Historia</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Bolsa de Trabajo</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Sucursales</a></li>
                </ul>
            </div>

            <!-- Columna de Ayuda -->
            <div class="col-md-4">
                <h5 class="fw-bold">AYUDA</h5>
                <hr class="border-secondary w-25">
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Facturación</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Rastrea tu Pedido</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Política de Envíos y Entregas</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Devoluciones y Cancelaciones</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Mayoreo</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Términos y Condiciones</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Aviso de Privacidad</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
