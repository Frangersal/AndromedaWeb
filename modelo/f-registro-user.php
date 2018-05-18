<?php

function ExisteUsuario($Username, $Conexion){
    $Consulta = "SELECT count(UserName) FROM usuario WHERE usuario.UserName = '$Username';";
    $resultado = $Conexion->query($Consulta);  
    $nRegistro = $resultado->fetchColumn();

    if($nRegistro>0){
        return true;
    }else{
        return false;
    }
}

function AltaUsuario($Nombre, $Apellido, $Email, $Username, $Contrasena, $Direccion, $Tipo, $Conexion){
    $Consulta = "INSERT INTO usuario(tipo, nombre, apellido, email, contrasena, Direccion, UserName) VALUES ('$Tipo', '$Nombre', '$Apellido', '$Email', '$Contrasena', '$Direccion', '$Username');";
    
try{
    $Conexion->query($Consulta);
 

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

}


?>