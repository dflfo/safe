<?php
header('Content-Type: application/json');

// Establece la zona horaria a Paraguay
date_default_timezone_set('America/Asuncion');

// Obtiene la hora actual
$hora_actual = date('Y-m-d H:i:s');

// Crea un array asociativo para almacenar la respuesta
$respuesta = array(
    'datetime' => $hora_actual
);

// Convierte el array a formato JSON y lo imprime
echo json_encode($respuesta);
?>
