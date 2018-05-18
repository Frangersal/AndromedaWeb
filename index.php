<!DOCTYPE html>

<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Andromeda Store</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>    
    
        
        <div class="Banner"> 
            <table>
                <tr>
                    <td><img src="imagenes/logo.png"></td>
                    <td><a href="index.php">Entrar</a></td>
                    <td><a href="paginas/registrarse.php">Registrarse</a></td>
                </tr>
            </table>
        </div>

<br>
        <div class="Letreros">
            Iniciar sesion
        </div>
        <br>        
        <div class="Formulario">
            
                <form method="POST" action="controlador/registro-iniciar-sesion.php" >
                        <label for="Usuario">Nombre de usuario:</label>  
                        <input type=text name="username" required/>
                            <br><br>
                        <label for="contrasena">contraseña:</label> 
                        <input type=password name="contrasena" required>
                            <br><br>
                            <input type="submit" value="Entrar"> 

                    </form>

        </div>     

        </div>
    </body>
</html>