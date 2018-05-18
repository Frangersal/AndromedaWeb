<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Andromeda Store</title>
        <link rel="stylesheet" href="../css/estilos.css">
    </head>

    <body>    

        <div class="Banner"> 
            <table>
                <tr>
                    <td><img src="../imagenes/logo.png"></td>
                    <td><a href="../index.php">Entrar</a></td>
                    <td><a href="registrarse.php">Registrarse</a></td>
                </tr>
            </table>
        </div>

<br>
        <div class="Letreros">
            Registro de usuario.
        </div>
        <br>        
        <div class="Formulario">
            
                <form  method="POST" action="../controlador/registro-user.php">
                        <label for="nombre">Nombre:</label>  
                        <input type=text name="num" required/>
                            <br><br>
                        <label for="Apellido">Apellido:</label> 
                        <input type=text name="apd" required>
                            <br><br>
                        <label for="e-mail">E-mail:</label>   
                        <input type=text name="eml" required>
                            <br><br>
                        <label for="UserName">Nombre de usuario:</label>  
                        <input type=text name="unm" required/>
                            <br><br>
                        <label for="contrasenia">Contraseña:</label>   
                        <input type=password name="csn" required>
                            <br><br>
                        <label for="direccion">Direccion:</label>   
                         <input type=text name="dir" required>
                           <br><br>
                           <input type="submit" value="Registrarse"> 

                    </form>

        </div>     

        </div>
    </body>
</html>