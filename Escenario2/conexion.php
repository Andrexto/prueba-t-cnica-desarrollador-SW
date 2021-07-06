<?php
//parametros para conectarse a la base de datos
$server = "localhost";
$user = "root";
$password = "";
$db = "conjunto";

//generando conexion
$conexion = new mysqli($server,$user,$password,$db);

//probando si conecta o no a la bd
if($conexion->connect_errno){
    die("la conexion fallo" . $conexion->connect_errno);
}

?>