<?php
require('../conexion.php');
require('../modelo/f-producto.php');
session_start();

$nombre = $_POST['nombre-articulo'];
$descripcion = $_POST['descripcion'];
$precio_unitario = $_POST['precio_unitario'];
$cantidad = $_POST['cantidad-articulo'];
$username = 2;
$tipo = $_POST['comboTipo'];

AltaProducto($nombre, $descripcion, $precio_unitario, $cantidad,$tipo, $conexion, $username);

?>