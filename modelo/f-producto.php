<?php


function AltaProducto($nombre, $descripcion, $precio_unitario, $cantidad, $imagen_articulo, $Conexion, $IdUsuario){
  


try{
        //$IdTipo = BuscarIdTipo($Tipo,$Conexion);
    //$IdUsuario = BuscarUsuario($Username,$Conexion);
    $FechaSistema =  date("Y-m-d h:i:s");

    if($IdUsuario==null){
        echo'Error al buscar el usuario';
    }else {
       $ConsultaVenta = "INSERT INTO VENTA(usuario_id, fecha_publicacion) VALUES ('$IdUsuario','$FechaSistema')";
       $Conexion->query($ConsultaVenta);

       
       $IdVenta = BuscarVenta($IdUsuario,$FechaSistema,$Conexion);
       header("Location: ../paginas/producto-arriba.php");

       $ConsultaArticulo="INSERT INTO articulos(nombre, descripcion, precio_unitario, cantidad, venta_id, imagen_articulo) VALUES('$nombre','$descripcion',$precio_unitario,$cantidad,$IdVenta,'$imagen_articulo');";
       $Conexion->query($ConsultaArticulo);
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