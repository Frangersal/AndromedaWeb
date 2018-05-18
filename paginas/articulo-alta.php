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
                        <li><a href="impresion.php">Impresion</a></li>
                        <li><a href="accesorios.php">Accesorios</a></li>
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
                        <label for="NombreArticulo">Nombre del articulo:</label>  
                        <input type=text name="nombre-articulo" required/>
                            <br><br>
                        <label for="descripcion">Descripcion del articulo:</label> 
                        <input type=text name="descripcion" required>
                            <br><br>
                        <label for="precio">Precio por unidad:</label>   
                        <input type=text name="precio_unitario" required>
                            <br><br>
                        <label for="cantidad">Cantidad de articulo:</label>   
                        <input type=num name="cantidad-articulo" required>
                            <br><br>
                        

                        <select  name="comboTipo" required >
                            <option value="" disabled selected>Tipo</option>
                            <option value="Pc">PC</option>
                            <option value="Laptop">Laptop</option>
                        </select>

                           <input type="submit" value="Subir articulo"> 

                    </form>

        </div>     

        </div>
    </body>
</html>