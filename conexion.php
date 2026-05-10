<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "bd_registro";//crear conexion a la base de datos

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>