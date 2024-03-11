<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

// Recoger datos del formulario
$id_especialidad = $_POST['id_especialidad'];
$nombre_especialidad = $_POST['nombre_especialidad'];

// Verificar si existe una especialidad con el mismo nombre
$check_sql = "SELECT * FROM especialidades WHERE NOMBRE_ESPEC = '$nombre_especialidad' AND ID_ESPECIALIDAD != $id_especialidad";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
    // Si existe una especialidad con el mismo nombre, mostrar un mensaje de error
    echo "Ya existe una especialidad con ese nombre.";
} else {
    // Si no existe una especialidad con el mismo nombre, realizar la actualización
    $sql = "UPDATE especialidades SET NOMBRE_ESPEC = '$nombre_especialidad' WHERE ID_ESPECIALIDAD = $id_especialidad";

    // Ejecutar consulta SQL
    if ($conn->query($sql) === TRUE) {
        header('Location: especialidades.php');
    } else {
        echo "Error de conexion ";
    }
}

$conn->close();
?>