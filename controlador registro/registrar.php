<?php
// Establecer conexión con la base de datos (Asumiendo MySQL)
$servername = "nombre_servidor";
$username = "nombre_usuario";
$password = "contraseña_usuario";
$dbname = "nombre_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
// Obtener los otros campos del formulario

$contrasena = $_POST['contrasena'];
$confirmarContrasena = $_POST['confirmar_contrasena'];

// Verificar si las contraseñas coinciden
if ($contrasena !== $confirmarContrasena) {
    die("Las contraseñas no coinciden. Por favor, regresa y corrige el error.");
}

// Aplicar medida de seguridad a la contraseña (hash + salting)
$hashContrasena = password_hash($contrasena, PASSWORD_BCRYPT);

// Insertar los datos en la base de datos
$sql = "INSERT INTO tabla_usuarios (nombre, contrasena) VALUES ('$nombre', '$hashContrasena')";

if ($conn->query($sql) === TRUE) {
    echo "¡Registro exitoso!";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

$conn->close();
?>
