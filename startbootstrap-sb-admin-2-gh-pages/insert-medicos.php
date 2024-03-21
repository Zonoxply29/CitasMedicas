<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

echo "Conexión a la base de datos realizada correctamente.<br>";

// Recoger datos del formulario
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$domicilio = $_POST['domicilio'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$especialidad_id = $_POST['especialidad'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

echo "Datos del formulario: $cedula, $nombre, $telefono, $sexo, $domicilio, $fecha_nacimiento, $especialidad_id, $correo, $contrasena<br>";

// Crear consulta SQL
$sql = "INSERT INTO medico (ID_MEDICO, NOMBRE, TELEFONO, SEXO, DOMICILIO, FECHA_DE_NACIMIENTO, ESPECIALIDAD, CORREO, CONTRASENA , FECHA_REGISTRO) VALUES ('$cedula','$nombre', '$telefono', '$sexo','$domicilio', '$fecha_nacimiento','$especialidad_id', '$correo','$contrasena', NOW())";

echo "Consulta SQL: $sql<br>";

// Ejecutar consulta SQL
if ($conn->query($sql) === TRUE) {
  header('Location: medicos.php');
} else {
  echo "Error de conexion " .$conn->error;
}

$conn->close();
