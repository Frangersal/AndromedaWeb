<?php
session_start();

require('../conexion.php');
require('../modelo/f-producto.php');



$nombre = $_POST['nombre-articulo'];
$descripcion = $_POST['descripcion'];
$precio_unitario = $_POST['precio_unitario'];
$cantidad = $_POST['cantidad-articulo'];
<<<<<<< HEAD
$username = $_SESSION['usuario'];

=======

$tipo = $_POST['comboTipo'];
>>>>>>> 9d68b7b1cc501f5db7c0ca018ad44a35002526bd

AltaProducto($nombre, $descripcion, $precio_unitario, $cantidad,$tipo, $conexion, $username);

?>