<?php
require_once 'php/db_conect.php'; 

if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    $sql = "DELETE FROM consultorio WHERE NUM_CONSULTORIO = $numero";
    
    if ($conn->query($sql)) {
        header('Location: consultorio.php');
    } else {
        echo "Error de conexion ";
    }
} else {
    echo "Numero de consultorio no válido";
}
$conn->close(); 