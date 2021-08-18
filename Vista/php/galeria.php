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
<header><h1>Proyecto EVN304</h1></header>
    <nav id="menuPrincipal">
    <?php 
            if(!isset($_SESSION['usuario'])){
    ?>
        <a class="opcionMenu" href="?peticion=home">Home</a>
        <a class="opcionMenu" href="?peticion=somos">Quienes Somos</a>
        <a class="opcionMenu" href="?peticion=galeria">Galeria</a>
        <a class="opcionMenu" href="?peticion=InicioSesion">Inicio de Sesion</a>
    <?php
        }else{
    ?>
        <a class="opcionMenu" href="?peticion=perfilCliente">Perfil</a>
        <a class="opcionMenu" href="?peticion=galeria">Galeria</a>
        <a class="opcionMenu" href="?peticion=cerrar">Cerrar Sesion</a>
    <?php
        }
    ?>
    </nav>
    <section>
        <h2>Galeria</h2>
        <?php
            while($producto = $datos->fetch_assoc()){
                echo '<div id="productos">
                <img src="'.$producto['foto'].'" />
                <h3>Modelo</h3>
                <span>'.$producto['modelo'].'</span>
                <h3>Nombre</h3>
                <span>'.$producto['nombre'].'</span>
                <h3>Descripcion</h3>
                <span>'.$producto['descripcion'].'</span>
                <h3>Precio</h3>
                <span>'.$producto['precio'].'</span>
                </div>';
            }
        ?>
    </section>
</body>
</html>
<?php

?>