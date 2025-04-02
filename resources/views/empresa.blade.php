extends("layouts.app")
@section("content")

    <!-- Contenedor del video de fondo -->
    <div class="video-container">
        <video autoplay loop muted playsinline class="video-background">
            <source src="{{ asset('img/dob.mp4') }}" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

    <!-- Contenedor del contenido sobre el video -->
    <div class="content-overlay">
        <div class="container py-5 text-center">
            <h1 class="fw-bold">Sobre <span style="color: #ffcc00;">DOBANO</span></h1>
            <p class="fs-5">DOBANO es una marca de moda urbana premium que fusiona exclusividad, calidad y sostenibilidad. Inspirados en la energía de las calles y la evolución constante de la cultura urbana, ofrecemos prendas diseñadas para reflejar autenticidad y compromiso con el medio ambiente.</p>

            <div class="text-center">
                <img src="{{ asset('img/logo.jpg') }}" class="img-fluid my-4" style="max-width: 300px; border-radius: 15px;">
            </div>

            <h2 class="mt-5 fw-bold">Nuestra Historia</h2>
            <p class="fs-5">DOBANO nace con la visión de redefinir la moda urbana, combinando estilo, innovación y responsabilidad ambiental. Surge como respuesta a la creciente demanda de prendas auténticas y sostenibles en un mercado dominado por grandes marcas internacionales. Desde su concepción, la empresa ha trabajado en un modelo de producción que prioriza la calidad artesanal sin perder la eficiencia de los procesos industriales modernos&#8203;:contentReference[oaicite:0]{index=0}.</p>

            <h2 class="mt-5 fw-bold">Nuestra Misión</h2>
            <p class="fs-5">DOBANO tiene el objetivo de proporcionar ropa premium que no solo refleje autenticidad y estilo, sino que también sea producida de manera responsable con el medio ambiente. Queremos ofrecer productos de alta calidad que representen exclusividad y empoderamiento personal&#8203;:contentReference[oaicite:1]{index=1}.</p>

            <h2 class="mt-5 fw-bold">Nuestra Visión</h2>
            <p class="fs-5">Convertirnos en una marca referente en la moda urbana premium a nivel mundial, destacándonos por nuestro compromiso con la sostenibilidad, la innovación y la exclusividad&#8203;:contentReference[oaicite:2]{index=2}.</p>

            <h2 class="mt-5 fw-bold">Nuestros Valores</h2>
            <ul class="fs-5">
                <li><strong>Autenticidad:</strong> Creemos en la moda como una forma de expresión personal.</li>
                <li><strong>Sostenibilidad:</strong> Utilizamos materiales reciclados y promovemos procesos ecológicos.</li>
                <li><strong>Innovación:</strong> Buscamos constantemente nuevas formas de crear productos exclusivos.</li>
                <li><strong>Compromiso:</strong> Apoyamos el comercio justo y garantizamos condiciones laborales responsables.</li>
            </ul>

            <h2 class="mt-5 fw-bold">Nuestro Compromiso con la Sostenibilidad</h2>
            <p class="fs-5">DOBANO adopta prácticas sostenibles para reducir su impacto ambiental. Nuestra producción utiliza textiles reciclados y procesos con menor huella de carbono. También implementamos estrategias de comercio justo con proveedores, asegurando que cada prenda sea una declaración de estilo y responsabilidad&#8203;:contentReference[oaicite:3]{index=3}.</p>

            <h2 class="mt-5 fw-bold">Expansión y Crecimiento</h2>
            <ul class="fs-5">
                <li>Construcción de una comunidad de clientes leales que compartan los valores de la marca.</li>
                <li>Presencia en tiendas exclusivas, plataformas digitales y eventos de moda urbana.</li>
                <li>Alianzas estratégicas con diseñadores emergentes y artistas urbanos para fortalecer nuestra identidad.</li>
                <li>Expansión a mercados internacionales mediante ediciones limitadas y colaboraciones estratégicas.</li>
                <li>Implementación de programas de reciclaje y recompra de prendas para fomentar la economía circular&#8203;:contentReference[oaicite:4]{index=4}.</li>
            </ul>

            <div class="text-center mt-4">
                <a href="{{ route('inicio') }}" class="btn btn-warning btn-lg">Volver al Inicio</a>
            </div>
        </div>
    </div>

@endsection

<!-- Estilos para el video de fondo -->
<style>
    /* Contenedor del video */
    .video-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1; /* Para que quede en el fondo */
    }

    /* Video de fondo */
    .video-background {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    /* Contenido sobre el video */
    .content-overlay {
        position: relative;
        z-index: 1; /* Asegura que el contenido esté encima del video */
        width: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        color: white;
        background: rgba(0, 0, 0, 0.5); /* Efecto de oscurecimiento para mejorar la legibilidad */
        padding: 50px 20px;
    }
</style>
