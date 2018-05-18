<?php
session_start();

require('../conexion.php');
/*require('../modelo/f-registro-iniciar-sesion.php');*/

$UserName = $_POST['username'];
$contrasena = $_POST['contrasena'];

$PocesoIniciarSesion = $conexion->query("SELECT id, username FROM usuario where username='$UserName' and contrasena='$contrasena';");
       $Tupla = $PocesoIniciarSesion->fetch();
if($Tupla){
            $_SESSION['usuario']=$Tupla['id'];
            header("Location: ../paginas/sesion-iniciada.php");
        } else {
            header("Location: ../index.php");
        }

?>