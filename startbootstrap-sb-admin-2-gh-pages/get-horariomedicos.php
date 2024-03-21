<?php
require_once 'php/db_conect.php'; // Incluye el archivo de conexión a la base de datos

// Obtener la fecha y el id del médico de la URL
$fecha_cita_asignada = $_GET['fecha_cita_asignada'];
$id_medico = $_GET['id_medico'];

// Crear la consulta SQL
$sql = "SELECT horario_medico.horarios, horario_medico.fech_atencion, consultorio.NUM_CONSULTORIO, horario_medico.intervalo, horario_medico.id_medico 
FROM horario_medico 
INNER JOIN consultorio ON horario_medico.id_consultorio = consultorio.ID_CONSULTORIO
WHERE horario_medico.id_medico = $id_medico AND horario_medico.fech_atencion = '$fecha_cita_asignada'";

// Ejecutar consulta SQL
$result = $conn->query($sql);

// Convertir los resultados en un array de arrays
$horarios = [];
while ($row = $result->fetch_assoc()) {
    $horarios[] = $row;
}

// Devolver los horarios como JSON
echo json_encode($horarios);
?>