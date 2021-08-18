<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/css/estilos.css">
    <title>Conexion a BD</title>
</head>
<body>
    <header><h1>Modificacion de productos</h1></header>
    <nav id="menuPrincipal">
    <a class="opcionMenu" href="?peticion=perfilAdmin">Perfil</a>
        <a class="opcionMenu" href="?peticion=registrarProducto">Nuevo Producto</a>
        <a class="opcionMenu" href="?peticion=productos">Productos</a>
        <a class="opcionMenu" href="?peticion=cerrar">Cierre de Sesion</a>
    </nav>
    <section>
        <center>
        <h3><label for="name">Introduce los datos del producto</label><br></h3>
        <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="modelo" value="<?php echo $datos['modelo']; ?>" disabled>
        <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" >
        <textarea name="descripcion" id="" cols="30" rows="10" value="<?php echo $datos['descripcion']; ?>"></textarea>
        <input type="number" name="precio" value="<?php echo $datos['precio']; ?>">
        <input type="text" name="stock" value="<?php echo $datos['stock']; ?>">
        <label>Introduce una foto</label>
        <input type="file" name="foto">
        <input type="hidden" name="peticion" value="cambiarProducto">
        <input type="submit" value="Guardar">
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
    </section>
</body>
</html>
<?php

?>