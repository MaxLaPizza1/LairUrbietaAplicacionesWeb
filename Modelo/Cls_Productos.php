<?php
    require_once 'Helper/Cls_Conexion.php';
    //Clase modelo para entidad Productos
    class Producto{
        //Declaracion de los atributos del usuario
        private $_modelo;
        private $_nombre;
        private $_descripcion;
        private $_precio;
        private $_stock;
        private $_foto;
        private $_estatus;

        public function SetDatos($mod,$nom,$desc,$prec,$stock,$foto){
            $this->_modelo=$mod;
            $this->_nombre=$nom;
            $this->_descripcion=$desc;
            $this->_precio=$prec;
            $this->_stock=$stock;
            $this->_foto=$foto;
            //Estatus es 1=existente 0=inexistente
        }

        public function insertarProductos(){
            $nombreFoto=$this->_foto['foto']['name'];
            $ruta='Vista/catalogo/productos'.$nombreFoto;
            move_uploaded_file($this->_foto['foto']['tmp_name'],$ruta);

            $sql="insert into productos values('$this->_modelo','$this->_nombre','$this->_descripcion','$this->_precio','$this->_stock','$ruta',1)";
            $res=$this->_aplicarQuery($sql);
            return $res;
        }
        
        public function productos(){
            $sql = "select * from productos where estatus = 1";
            $res = $this->_aplicarQuery($sql);
            return $res;
        }

        public function cancelarProducto(){
            $sql = "update productos set estatus = 0 where modelo = '$this->_modelo'";
            $this->_aplicarQuery($sql);
            return;
        }

        public function localizarProducto(){
            $sql = "select modelo,nombre,descripcion,precio,stock,foto from productos where modelo = '$this->_modelo'";
            $res = $this->_aplicarQuery($sql);
            $valores = $res->fetch_assoc();
            return $valores;
        }

        /*public function modificarProducto(){

        }*/

        public function cambiarProducto(){
            $sql="update productos set 
            nombre = '$this->_nombre',
            descripcion = '$this->_descripcion',
            precio = $this->_precio,
            stock = $this->_stock where modelo = '$this->_modelo'";
            $this->_aplicarQuery($sql);
            return;
        }
        public function _aplicarQuery($consulta){
            $objConexion = new Conexion();
            $res=$objConexion->ejecutarConsulta($consulta);
            $objConexion->cerrarConexion();
            return $res;
        }

    }
?>