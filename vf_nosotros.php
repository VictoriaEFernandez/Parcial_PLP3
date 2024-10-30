<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Agencia Inmobiliaria</title>
    <link rel="stylesheet" href="css/vf_estilos.css">
</head>
<body>
    <header>
        <h1>Nosotros</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="vf_nosotros.php">Nosotros</a></li>
                <li><a href="vf_propiedades.php">Propiedades</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="historia">
            <h2>Nuestra Historia</h2>
            <p>Fundada en 2005, nuestra agencia inmobiliaria ha ayudado a cientos de clientes a encontrar el lugar perfecto para vivir o invertir. Nos enorgullece nuestro enfoque en la transparencia y la dedicación hacia nuestros clientes.</p>
        </section>

        <section class="equipo">
            <h2>Nuestro Equipo</h2>
            <div class="tarjetas-equipo">
                <div class="miembro-equipo">
                    <h3>María García</h3>
                    <p>Experta en bienes raíces residenciales, con más de 15 años de experiencia.</p>
                </div>
                <div class="miembro-equipo">
                    <h3>Juan Pérez</h3>
                    <p>Especialista en propiedades comerciales y asesoría en inversiones inmobiliarias.</p>
                </div>
                <div class="miembro-equipo">
                    <h3>Luisa Fernández</h3>
                    <p>Consultora financiera, experta en financiamiento y crédito hipotecario.</p>
                </div>
            </div>
        </section>

        <section id="contacto" class="contacto">
            <h2>Contáctanos</h2>
            <p>Para obtener más información sobre nuestros servicios o agendar una cita, llámanos al (123) 456-7890 o envíanos un correo a <a href="mailto:contacto@inmobiliaria.com">contacto@inmobiliaria.com</a>.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Agencia Inmobiliaria. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
