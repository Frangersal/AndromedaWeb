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
                    <td><a href="carrito.php">Carrito</a></td>
                </tr>
            </table>
        </div>

        
        <div id="header">
            <ul class="nav">
                <li><a href="sesion-iniciada.php">Inicio</a></li>
                <li><a href="">Productos</a>
                    <ul>
                        <li><a href="laptops.php">Laptops</a></li>
                        <li><a href="pc.php">PC</a></li>
                    </ul>
                </li>
                <li><a href="perfil.php">Perfil</a></li>
            </ul>
        </div>
<br>
        <div class="Letreros">
            Vender articulo
        </div>
        <br>        
        <div class="Formulario">
            
                <form method="POST" action="../controlador/registro-producto.php" enctype="multipart/form-data" >
                        

                        <label for="cantidad">Cantidad de articulo:</label>   
                        <input type=num name="cantidad-articulo" required>
                            <br><br>

                           <input type="submit" value="Agregar saldo"> 

                    </form>

        </div>     

        </div>
    </body>
</html>