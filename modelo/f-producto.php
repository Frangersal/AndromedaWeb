<?php


function AltaProducto($nombre, $descripcion, $precio_unitario, $cantidad,$Tipo, $Conexion, $IdUsuario){
  
try{
    $IdTipo = BuscarIdTipo($Tipo,$Conexion);
    $FechaSistema =  date("Y-m-d h:i:s");

    if(!$IdUsuario){
        echo'Error al buscar el usuario';
    }else {
        $ConsultaVenta = "INSERT INTO VENTA(usuario_id, fecha_publicacion) VALUES ('$IdUsuario','$FechaSistema')";
        $Conexion->query($ConsultaVenta);
       
        $IdVenta = BuscarVenta($IdUsuario,$FechaSistema,$Conexion);
        echo "Hola Venta $IdTipo";
        $ConsultaArticulo = "INSERT INTO articulos (nombre, descripcion, precio_unitario, cantidad, venta_id, tipo_id) VALUES ('$nombre', '$descripcion', '$precio_unitario', '$cantidad', '$IdVenta', '$IdTipo');";
        
       $Conexion->query($ConsultaArticulo);

       header("Location: ../paginas/producto-arriba.php");
    }

    }catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    }
}


function BuscarVenta($IdUsuario,$FechaSistema,$Conexion){
    $Consulta ="SELECT id FROM tiendaonline.venta where usuario_id=$IdUsuario and fecha_publicacion='$FechaSistema';";
    $Resultado = $Conexion->query($Consulta);

    while ($Tupla = $Resultado->fetch(PDO::FETCH_ASSOC)) {
        return $Tupla ['id'];
    }
}


function BuscarIdTipo($Tipo,$Conexion){
    $Consulta ="SELECT id FROM catalogo_tipo WHERE tipo = '$Tipo'";
    
    $Resultado = $Conexion->query($Consulta);

    while ($Tupla = $Resultado->fetch(PDO::FETCH_ASSOC)) {
        return $Tupla ['id'];
    }

}



?>