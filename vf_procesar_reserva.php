<?php
// Iniciar la sesión y conectar a la base de datos
session_start();
include 'vf_conexion.php'; // Asegúrate de tener tu archivo de conexión a la base de datos
// Obtener propiedades
$sql = "SELECT ID_Propiedad, Nombre FROM Propiedades";
$result = $conexion->query($sql);
$propiedades = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $propiedades[] = $row;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobar si las claves existen antes de acceder a ellas
    $fecha_entrada = $_POST['fecha_entrada'] ?? '';
    $fecha_salida = $_POST['fecha_salida'] ?? '';
    $num_huespedes = $_POST['num_huespedes'] ?? '';
    $nombre_cliente = $_POST['nombre_cliente'] ?? '';
    $correo_cliente = $_POST['correo_cliente'] ?? '';
    $telefono_cliente = $_POST['telefono_cliente'] ?? '';
    $id_propiedad = $_POST['propiedad_id'] ?? '';

    // Comprobar que las variables no estén vacías
    if (!empty($fecha_entrada) && !empty($fecha_salida) && !empty($num_huespedes) && !empty($nombre_cliente) && !empty($correo_cliente) && !empty($id_propiedad)) {
        // Consulta para insertar los datos en la tabla Reservas
        $sql = "INSERT INTO Reservas (ID_Propiedad, Fecha_Entrada, Fecha_Salida, Número_Huéspedes, Nombre_Cliente, Correo_Electronico_Cliente, Teléfono_Cliente) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($conexion) {
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("issssss", $id_propiedad, $fecha_entrada, $fecha_salida, $num_huespedes, $nombre_cliente, $correo_cliente, $telefono_cliente);

            if ($stmt->execute()) {
                echo "Reserva realizada con éxito.";
            } else {
                echo "Error en la reserva: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error de conexión: " . $conexion->connect_error;
        }

        $conexion->close();
    } else {
        echo "Por favor, complete todos los campos requeridos.";
    }
}


// Mostrar el formulario
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <link rel="stylesheet" type="text/css" href="css/vf_estilos.css"> <!-- Asegúrate de que la ruta sea correcta -->
</head>
<body>

<div class="contenedor-formulario">
    <h2>Formulario de Reserva</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="propiedad_id">Selecciona la Propiedad:</label>
            <select name="propiedad_id" id="propiedad_id" required>
                <option value="">Seleccione una propiedad</option>
                <?php foreach ($propiedades as $propiedad): ?>
                    <option value="<?php echo $propiedad['ID_Propiedad']; ?>">
                        <?php echo htmlspecialchars($propiedad['Nombre']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_entrada">Fecha de Entrada:</label>
            <input type="date" name="fecha_entrada" required>
        </div>

        <div class="form-group">
            <label for="fecha_salida">Fecha de Salida:</label>
            <input type="date" name="fecha_salida" required>
        </div>

        <div class="form-group">
            <label for="num_huespedes">Número de Huéspedes:</label>
            <input type="number" name="num_huespedes" required>
        </div>

        <div class="form-group">
            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" name="nombre_cliente" required>
        </div>

        <div class="form-group">
            <label for="correo_cliente">Correo Electrónico:</label>
            <input type="email" name="correo_cliente" required>
        </div>

        <div class="form-group">
            <label for="telefono_cliente">Teléfono:</label>
            <input type="text" name="telefono_cliente">
        </div>

        <input type="submit" value="Reservar">
    </form>
</div>

</body>
</html>
