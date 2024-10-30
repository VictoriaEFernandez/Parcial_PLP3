<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia Mobiliaria</title>
    <link rel="stylesheet" href="css/vf_estilos.css">
</head>
<body>
    <header>
        <h1>Bienvenidos a Nuestra agencia inmobiliaria</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="vf_nosotros.php">Nosotros</a></li>
                <li><a href="vf_propiedades.php">Propiedades</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="intro">
            <h2>Encuentra tu hogar ideal con nosotros</h2>
            <p>Somos una agencia inmobiliaria comprometida en ofrecerte las mejores propiedades y servicios personalizados.</p>
        </section>

        <section class="servicios">
            <h2>Nuestros Servicios</h2>
            <div class="tarjetas-servicios">
                <div class="tarjeta-servicio">
                    <h3>Compra y Venta</h3>
                    <p>Asesoría personalizada para compradores y vendedores. Encuentra las mejores opciones en el mercado.</p>
                </div>
                <div class="tarjeta-servicio">
                    <h3>Alquiler</h3>
                    <p>Ofrecemos alquileres de casas, apartamentos y oficinas en ubicaciones privilegiadas.</p>
                </div>
                <div class="tarjeta-servicio">
                    <h3>Asesoría Financiera</h3>
                    <p>Te ayudamos a obtener el mejor financiamiento para adquirir la propiedad de tus sueños.</p>
                </div>
            </div>
        <section class="reserva-boton">
            <h2>RESERVA AHORA</h2>
            <form action="vf_procesar_reserva.php" method="post">
                <button type="submit">Reservar Ahora</button>
            </form>
        </section>
        <section class="contacto">
            <h2>Contáctanos</h2>
            <p>¿Tienes preguntas? ¿Necesitas ayuda para encontrar una propiedad? <a href="nosotros.php#contacto">Contáctanos aquí</a> para recibir asesoría personalizada.</p>
        </section>

    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Agencia Inmobiliaria. Todos los derechos reservados.</p>
    </footer>
    
</body>
</html>