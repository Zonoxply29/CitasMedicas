<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

// Recoger datos del formulario
$numero_consultorio = $_POST['numero_consultorio'];
$disponibilidad_consultorio = $_POST['disponibilidad'];

// Crear consulta SQL
$sql = "INSERT INTO consultorio (NUM_CONSULTORIO, DISPONIBILIDAD) VALUES ('$numero_consultorio','$disponibilidad_consultorio')";

// Ejecutar consulta SQL
if ($conn->query($sql) === TRUE) {
  header('Location: consultorio.php');
} else {
  echo "Error de conexion ";
}

$conn->close();
?>