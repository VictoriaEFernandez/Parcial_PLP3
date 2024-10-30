<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades - Agencia Inmobiliaria</title>
    <link rel="stylesheet" href="css/vf_estilos.css">
</head>
<body>
    <header>
        <h1>Propiedades</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="vf_nosotros.php">Nosotros</a></li>
                <li><a href="vf_propiedades.php">Propiedades</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="galeria-propiedades">
        <h2>Propiedades Destacadas</h2>
        <div class="propiedad-actual" id="propiedadActual">
            <img src="vf_img/vf_img1.jpg" alt="Propiedad 1">
            <h3>Propiedad 1</h3>
            <p>Hermosa casa con vista al mar, 3 habitaciones y 2 baños.</p>
        </div>

        <div class="propiedades-lista">
            <div class="propiedad">
                <img src="vf_img/vf_img1.jpg" alt="Propiedad 1">
                <h3>Propiedad 1</h3>
                <p>Hermosa casa con vista al mar, 3 habitaciones y 2 baños.</p>
            </div>
            <div class="propiedad">
                <img src="vf_img/vf_img2.jpg" alt="Propiedad 2">
                <h3>Propiedad 2</h3>
                <p>Apartamento moderno en el centro, ideal para parejas.</p>
            </div>
            <div class="propiedad">
                <img src="vf_img/vf_img3.jpg" alt="Propiedad 3">
                <h3>Propiedad 3</h3>
                <p>Casa en las montañas, perfecta para amantes de la naturaleza.</p>
            </div>
            <div class="propiedad">
                <img src="vf_img/vf_img4.jpg" alt="Propiedad 4">
                <h3>Propiedad 4</h3>
                <p>Espaciosa casa de campo con jardín y piscina.</p>
            </div>
            <div class="propiedad">
                <img src="vf_img/vf_img5.jpg" alt="Propiedad 5">
                <h3>Propiedad 5</h3>
                <p>Apartamento en zona tranquila, cerca de parques y escuelas.</p>
            </div>
            <div class="propiedad">
                <img src="vf_img/vf_img6.jpg" alt="Propiedad 6">
                <h3>Propiedad 6</h3>
                <p>Villa de lujo con todos los servicios y privacidad garantizada.</p>
            </div>
        </div>
    </section>
</main>


    <footer>
        <p>&copy; <?php echo date("Y"); ?> Agencia Inmobiliaria. Todos los derechos reservados.</p>
    </footer>
<script src="vf_javascript.js" ></script>
</body>
</html>
