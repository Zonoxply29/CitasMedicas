<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$curp = $_POST['curp'];
$telefono = $_POST['telefono'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$domicilio = $_POST['domicilio'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Crear consulta SQL
$sql = "INSERT INTO paciente (CURP, NOMBRE, DOMICILIO, SEXO, TELEFONO, FECHA_DE_NACIMIENTO, CORREO, CONTRASENA, FECHA_DE_REGISTRO) VALUES ('$curp','$nombre', '$domicilio', '$sexo','$telefono', '$fecha_nacimiento', '$correo','$contrasena', NOW())";

// Ejecutar consulta SQL
if ($conn->query($sql) === TRUE) {
  header('Location: pacientes.php');
} else {
  echo "Error de conexion ";
}

$conn->close();
