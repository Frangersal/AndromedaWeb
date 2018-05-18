<?php
session_start();

require('../conexion.php');
require('../modelo/f-producto.php');



$nombre = $_POST['nombre-articulo'];
$descripcion = $_POST['descripcion'];
$precio_unitario = $_POST['precio_unitario'];
$cantidad = $_POST['cantidad-articulo'];
$username = $_SESSION['usuario'];
$imagen_articulo = $_POST['imagen'];

AltaProducto($nombre, $descripcion, $precio_unitario, $cantidad, $imagen_articulo, $conexion, $username);


?>