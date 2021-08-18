<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Vista/css/estilos.css" rel="stylesheet" type="text/css">
    <title>Conexion a BD</title>
</head>
<body>
    <header><h1>Max La Pizza</h1></header>
    <nav id="menuPrincipal">
        <a class="opcionMenu" href="?peticion=home">Inicio</a>
        <a class="opcionMenu" href="?peticion=somos">Quienes Somos</a>
        <a class="opcionMenu" href="?peticion=galeria">Galeria</a>
        <a class="opcionMenu" href="?peticion=InicioSesion">Iniciar sesion</a>
    </nav>
    <section id="bienvenida">
        <h2 class="tituloL">¡Max La Pizza, te da la bienvenida!</h2>
        <section id="bienvenidaL">
        <p>
            Max la pizza es un negocio de comida rapida enfocado en brindar al cliente las mejores alternativas en 
            cuanto a platillos. No solo ofrecemos pizzas preparadas alrededor de una amplia variedad de platillos,
            sino que tambien ofrecemos una gama de comida que va desde las hamburguesas hasta las alitas de pollo.
        </p>
        <br>
        <p>En Max la pizza. Siempre buscaremos entregar a el cliente la mejor experencia al brindarle la capacidad
            de elegir su comida acorde a su gusto. ¿No te gustan las alitas picantes?, ¡No hay problema! Tenemos
            alitas en salsa agridulce u otros acompañamientos adecuados para cualquier tipo de cliente.
        </p>
        <br>
        <br>
        </section>
        <section id="bienvenidaImg">
            <img id="imagenHome" src="Vista/media/pizzaHome.png" alt="pizzita">
        </section>
    </section>
    <section>
        <article id="servicio">
            <h3>Servicios de la empresa</h3>
            <br>
            <ul class="listaServicios">
                <li id="cuadro1">
                    <img class="logo" src="Vista/media/pizz.png" alt="">
                    <h2>Venta de pizza</h2>
                    <p class="lista">La pizzeria Max la pizza ser encarga de la preparacion de pizzas convencionales,
                        con una serie variada de ingredientes y combinaciones totalmente a disposicion
                        del cliente. Se compromete a entregar una pizza acorde a las necesidades del cliente.
                    </p>
                </li>
                <li id="cuadro2">
                    <img class="logo" src="Vista/media/pizz.png" alt="">
                    <h2>Venta de comida rapida</h2>
                    <p class="lista">Otros de los alimentos brindados que ofrece mas la pizza son desde las hamburguesas
                        hasta las alas de pollo y papas fritas, entregando un menu variado que se adapta a 
                        gustos de los clientes
                    </p>
                    <br>
                </li>
                <li id="cuadro3">
                    <img class="logo" src="Vista/media/pizz.png" alt="">
                    <h2>Comida en el local</h2>
                    <p class="lista">Max la pizza ofrece la alternativa de consumir los alimentos solicitados por el 
                        el cliente dentro del establecimiento, para esto, entrega una serie de mesas y 
                        bebidas que acompañen a los alimentos antes mencionados.
                    </p>
                    <br>
                </li>
                <li id="cuadro4">
                    <img class="logo" src="Vista/media/pizz.png" alt="">
                    <h2>Servicio a domicilio</h2>
                    <p class="lista">Si lo tuyo no es comer fuera, no te preocupes. Max la pizza ofrece varias 
                        alternativas, desde llamar por numero de telefono para asi solicitar tu
                        comida, hasta ir al local a recoger tu pedido y posteriormente retirarte.
                    </p>
                    <br>
                </li>
            </ul>
        </article>
        <article id="galeria">
            <img id="imagen1" src="Vista/media/imagen1.jpg" alt="">
            <img id="imagen2" src="Vista/media/imagen2.jpg" alt="">
            <img id="imagen3" src="Vista/media/imagen3.jpg" alt="">
            <img id="imagen4" src="Vista/media/imagen4.jpg" alt="">
        </article>
    </section>
    
    <footer id="pie">
        <ul class="redes">
            <li>
                <a href="https://www.facebook.com/">Facebook</a>
            </li>
            <li>
                <a href="https://twitter.com/home">Twitter</a>
            </li>
            <li>
                <a href="https://www.instagram.com">Instagram</a>
            </li>
        </ul>
    </footer>
</body>

</html>
<?php

?>