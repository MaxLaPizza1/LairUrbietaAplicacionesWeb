<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/css/estilos.css">
    <title>Registro de productos</title>
</head>
<body>
    <header><h1>Max La Pizza</h1></header>
    <nav id="menuPrincipal">
    <a class="opcionMenu" href="?peticion=perfilAdmin">Perfil</a>
        <a class="opcionMenu" href="?peticion=registrarProducto">Nuevo Producto</a>
        <a class="opcionMenu" href="?peticion=productos">Productos</a>
        <a class="opcionMenu" href="?peticion=cerrar">Cerrar Sesion</a>
    </nav>
    <section id="bienvenida">
        <center>
        <form method="post" action="" enctype="multipart/form-data">
        <h3><label for="name">Introduce los datos del producto</label><br></h3>
        <br>
        <input type="text" name="modelo" placeholder="Introduce el modelo">
        <input type="text" name="nombre" placeholder="Introduce el nombre">
        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Introduce una descripcion"></textarea>
        <input type="number" name="precio" placeholder="Introduce el precio">
        <input type="text" name="stock" placeholder="Introduce el stock">
        <label>Introduce una foto</label>
        <input type="file" name="foto">
        <input type="hidden" name="peticion" value="guardarProducto">
        <input type="submit" onclick="encriptar()" value="Guardar">
        </form>

        <p>
            <?php 
                if(isset($nombre)){
                    if($datos){
                        echo 'El registro se realizo correctamente';
                    }else{
                        echo 'No se realizo el registro de manera correcta';
                    }
                }
            ?>
        </p>
        </center>
        <br>
        <br>
    </section>
</body>
</html>
<?php

?>