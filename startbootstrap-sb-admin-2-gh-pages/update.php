<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

// Recoger datos del formulario
$id_paciente = $_POST['id_paciente'];
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$curp = $_POST['curp'];
$telefono = $_POST['telefono'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$domicilio = $_POST['domicilio'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Crear consulta SQL
$sql = "UPDATE paciente SET CURP = '$curp', NOMBRE = '$nombre', DOMICILIO = '$domicilio', SEXO = '$sexo', TELEFONO = '$telefono', FECHA_DE_NACIMIENTO = '$fecha_nacimiento', CORREO = '$correo', CONTRASENA = '$contrasena' WHERE ID_PACIENTE = $id_paciente";

// Ejecutar consulta SQL
if ($conn->query($sql) === TRUE) {
    header('Location: pacientes.php');
} else {
  echo "Error de conexion ";
}

$conn->close();