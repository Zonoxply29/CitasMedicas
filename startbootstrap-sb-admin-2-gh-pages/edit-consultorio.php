<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

// Recoger datos del formulario
$numero_consultorio = $_POST['numero_consultorio'];
$disponibilidad_consultorio = $_POST['disponibilidad'];

// Crear consulta SQL
$sql = "UPDATE consultorio SET DISPONIBILIDAD = '$disponibilidad_consultorio' WHERE NUM_CONSULTORIO = '$numero_consultorio'";

// Ejecutar consulta SQL
if ($conn->query($sql) === TRUE) {
  header('Location: consultorio.php');
} else {
  echo "Error de conexion ";
}

$conn->close();
?>