<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

// Recoger datos del formulario
$nombre_especialidad = $_POST['nombre_especialidad'];

// Crear consulta SQL
$sql = "INSERT INTO especialidades (NOMBRE_ESPEC, FECHA_DE_REGISTRO) VALUES ('$nombre_especialidad', NOW())";

// Ejecutar consulta SQL
if ($conn->query($sql) === TRUE) {
  header('Location: especialidades.php');
} else {
  echo "Error de conexion ";
}

$conn->close();
?>