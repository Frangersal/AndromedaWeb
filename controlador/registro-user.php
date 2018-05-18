<?php
require('../conexion.php');
require('../modelo/f-registro-user.php');

$nombre = $_POST['num'];
$apellido = $_POST['apd'];
$email = $_POST['eml'];
$username = $_POST['unm'];
$contrasena = $_POST['csn'];
$direccion = $_POST['dir'];
$tipo = "usuario";

$ExiteUser = ExisteUsuario($username, $conexion);

if($ExiteUser){     
    headder("Location:paginas/registro-fallido.php");
}else{
    AltaUsuario($nombre, $apellido, $email, $username, $contrasena, $direccion, $tipo, $conexion);
    headder("Location:paginas/registro-exitoso.php");
    
}


?>