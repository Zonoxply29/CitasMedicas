<?php
require_once 'php/db_conect.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM especialidades where ID_ESPECIALIDAD = $id";
    
    if ($conec=$conn->query($sql)) {
        header('Location: especialidades.php');
    } else {
        echo "Error de conexion ";
    }
} else {
    echo "ID no válido";
}
$conn->close(); 