<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/css/estilos.css">
    <title>Productos</title>
</head>
<body>
    <header><h1>Max La Pizza</h1></header>
    <nav id="menuPrincipal">
        <a class="opcionMenu" href="?peticion=perfilAdmin">Perfil</a>
        <a class="opcionMenu" href="?peticion=registrarProducto">Nuevo Producto</a>
        <a class="opcionMenu" href="?peticion=productos">Productos</a>
        <a class="opcionMenu" href="?peticion=cerrar">Cierre de Sesion</a>
    </nav>
    <section id="bienvenida">
        <h1>Productos</h1>
        <table>
            <tr>
                <th>Cancelar</th>
                <th>Foto</th>
                <th>Modelo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Modificar</th>
            </tr>
            <?php
                 while($producto = $datos->fetch_assoc()){
                     echo '<tr>
                            <td><a href="?peticion=cancelarProducto&modelo='.$producto['modelo'].'"> 
                            <img class="icono" src="Vista/media/cancelar.png"></a></td>
                            <td><img src="'.$producto['foto'].'" /></td>
                            <td><span>'.$producto['modelo'].'</span></td>
                            <td><span>'.$producto['nombre'].'</span></td>
                            <td><span>'.$producto['descripcion'].'</span></td>
                            <td><span>'.$producto['precio'].'</span></td>
                            <td><span>'.$producto['stock'].'</span></td>
                            <td><a href="?peticion=modificarProducto&modelo='.$producto['modelo'].'"> 
                            <img class="icono" src="Vista/media/editar.png"></a></td>
                           </tr>';
                 }
            ?>
        </table>
    </section>
</body>
</html>