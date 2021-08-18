<?php
    //Controlador base
    $peticion = 'home';
    extract($_REQUEST);
    //Agregar clase sesion
    require_once 'helper/Cls_Sesion.php';
    $objSesion = new Sesion();
    //validar el usuario de la sesion
    if(!isset($_SESSION['usuario'])){
        switch($peticion){
            case 'home':
                require_once 'Vista/php/Home.php';
                break;
            case 'somos':
                require_once 'Vista/php/somos.php';
                break;
            case 'galeria':
                require_once 'Modelo/Cls_Productos.php';
                $objProducto = new Producto();
                $datos=$objProducto->productos();
                require_once 'Vista/php/galeria.php';
                break;
            case 'InicioSesion':
                require_once 'Vista/php/InicioSesion.php';
                break;
            case 'RegistroUsuario':
                require_once 'Vista/php/RegistroUsuario.php';
                break;
            case 'guardarUsuario':
                require_once 'Modelo/Cls_usuarios.php';
                $objUsuario= new Usuario();
                $objUsuario->setDatos($correo,$nombre,$contrasena,$_FILES);
                $datos=$objUsuario->insertarUsuarios();
                require_once 'Vista/php/RegistroUsuario.php';
                break;
            case 'ingresar':
                require_once 'Modelo/Cls_usuarios.php';
                $objUsuario = new Usuario();
                $objUsuario->SetDatos($correo,null, $contrasena, null);
                $datos=$objUsuario->login();

                //Validacion del perfil de usuario
                $objSesion->crearVariable('usuario',$datos);
                if(isset($datos['perfil'])){
                    $objSesion->crearVariable('usuario',$datos);
                    //Crear una variable de sesion
                    if($datos['perfil']==2){
                        header('location:?peticion=perfilCliente');
                    }else{
                        header('location:?peticion=perfilAdmin');
                    }
                }
                require_once 'Vista/php/login.php';
                break;
            default:
                header('Location:Vista/php/home.php');
        }

    }
        //Validar el acceso al Perfil 1 = Administrador
        //Requerimos de una variable de sesion
        if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil']==1){
            switch($peticion){
            case 'perfilAdmin':
                require_once 'Vista/php/indexAdmin.php';
                break;
            case 'registrarProducto':
                require_once 'Vista/php/registrarProducto.php';
                break;
            case 'guardarProducto':
                require_once 'Modelo/Cls_Productos.php';
                $objProducto= new Producto();
                $objProducto->setDatos($modelo,$nombre,$descripcion,$precio,$stock,$_FILES);
                $datos=$objProducto->insertarProductos();
                require_once 'Vista/php/registrarProducto.php';
                break;
                case 'productos':
                    require_once 'Modelo/Cls_Productos.php';
                    $objProducto = new Producto();
                    $datos=$objProducto->productos();
                    require_once 'Vista/php/productos.php';
                    break;
                case 'cancelarProducto':
                    require_once 'Modelo/Cls_Productos.php';
                    $objProducto = new Producto();
                    $objProducto->setDatos($modelo,null,null,null,null,null);
                    $objProducto->cancelarProducto();
                    $datos=$objProducto->productos();
                    require_once 'Vista/php/productos.php';
                    break;
                case 'modificarProducto':
                    require_once 'Modelo/Cls_Productos.php';
                    $objProducto = new Producto();
                    $objProducto->setDatos($modelo,null,null,null,null,null);
                    $datos=$objProducto->localizarProducto();
                    //Generar una vista para que el administrador pueda modificar el formulario
                    require_once 'Vista/php/modificarProducto.php';
                    break;
                case 'cambiarProducto':
                    require_once 'Modelo/Cls_Productos.php';
                    $objProducto = new Producto();
                    $objProducto->setDatos($modelo,$nombre,$descripcion,$precio,$stock,$_FILES);
                    $objProducto->cambiarProducto();
                    $datos=$objProducto->productos();
                    require_once 'Vista/php/productos.php';
                    break;
            case 'cerrar':
                $objSesion->borrarVariable('usuario');
                require_once 'Vista/php/InicioSesion.php';
                break;
            }
        }
        if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil']==2){
            switch($peticion){
            case 'perfilCliente':
                require_once 'Vista/php/indexCliente.php';
                break;
            case 'galeria':
                require_once 'Modelo/Cls_Productos.php';
                $objProducto = new Producto();
                $datos=$objProducto->productos();
                require_once 'Vista/php/galeria.php';
                break;
            case 'cerrar':
                $objSesion->borrarVariable('usuario');
                require_once 'Vista/php/InicioSesion.php';
                break;
            }
        }

?>