<?php
// Recibir los datos del formulario
$nombre = htmlspecialchars($_POST['nombre']);
$institucion = htmlspecialchars($_POST['institucion']);
$edad = htmlspecialchars($_POST['edad']);
$genero = htmlspecialchars($_POST['genero']);
$area_interes = isset($_POST['area_interes']) ? $_POST['area_interes'] : [];
$fecha_asistencia = htmlspecialchars($_POST['fecha_asistencia']);
$dias_asistencia = htmlspecialchars($_POST['dias_asistencia']);
$email = htmlspecialchars($_POST['email']);

// Imprimir los datos
echo "Nombre: $nombre <br>";
echo "Institución: $institucion <br>";
echo "Edad: $edad <br>";
echo "Género: $genero <br>";
echo "Áreas de interés:<ul>";
foreach ($area_interes as $area) {
    echo "<li>" . htmlspecialchars($area) . "</li>";
}
echo "</ul>";
echo "Fecha de asistencia: $fecha_asistencia <br>";
echo "Días de asistencia: $dias_asistencia <br>";
echo "Correo Electrónico: $email <br>";
?>

