<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "usuarios");

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Query para insertar datos en la tabla usuarios
$sql = "INSERT INTO usuarios (Nombre, Email, Contrasena) VALUES ('$nombre', '$email', '$password')";

if (mysqli_query($conexion, $sql)) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);
?>
