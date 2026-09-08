<?php
require_once 'Persona.php';
require_once 'estudiante.php'; 

$estudiante = new estudiante("Pepe", 15, "G");

echo $estudiante->MostrarInformacion();
?>

