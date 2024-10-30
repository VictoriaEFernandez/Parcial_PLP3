<?php
// db_connect.php
$conexion = mysqli_connect("localhost", "root", "", "vf_inmobiliaria _bd-parcial");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
