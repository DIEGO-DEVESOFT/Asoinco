<?php
    class Producto{
        # Atributos
        private $dbh;
        protected $productos_codigo;
        protected $nombre_producto;
        protected $categoria_codigo;
        
        # Sobrecarga de Constructores
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function __construct2($productos_codigo, $nombre_producto){
            $this->productos_codigo = $productos_codigo;
            $this->nombre_producto = $nombre_producto;
        }


        public function __construct3($productos_codigo, $nombre_producto,$categoria_codigo){
            $this->productos_codigo = $productos_codigo;
            $this->nombre_producto = $nombre_producto;
            $this->categoria_codigo = $categoria_codigo;
        }

        // public function __construct4($productos_codigo, $nombre_producto,$nombre_categoria){
        //     $this->productos_codigo = $productos_codigo;
        //     $this->nombre_producto = $nombre_producto;
        //     $this->nombre_categoria = $nombre_categoria;
        // }

        # Métodos: $productos_codigo
        public function setproductos_codigo($productos_codigo){
            $this->productos_codigo = $productos_codigo;
        } 
        public function getproductos_codigo(){
            return $this->productos_codigo;
        } 

        # Métodos: $nombre_producto
        public function setnombre_producto($nombre_producto){
            $this->nombre_producto = $nombre_producto;
        } 
        public function getnombre_producto(){
            return $this->nombre_producto;
        } 

        # Métodos: $categoria_codigo
        public function setcategoria_codigo($categoria_codigo){
            $this->categoria_codigo = $categoria_codigo;
        } 
        public function getcategoria_codigo(){
            return $this->categoria_codigo;
        } 

        

        
        public function registrarProductos() {
            try {
                $sql = 'INSERT INTO PRODUCTOS VALUES (
                            :productos_codigo,
                            :nombre_producto,
                            :categoria_codigo
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('productos_codigo',$this->getproductos_codigo());
                $stmt->bindValue('nombre_producto', $this->getnombre_producto());
                $stmt->bindValue('categoria_codigo', $this->getcategoria_codigo());      
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 

        #----CONSULTAR PRODUCTOS-----------/

        public function consultarProductos() {
            try {
                $productoList = [];
                $sql = 'SELECT * FROM PRODUCTOS,CATEGORIAS where categorias.categoria_codigo = productos.categoria_codigo';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $producto) {
                    $productoList[] = new Producto(
                        $producto['productos_codigo'],
                        $producto['nombre_producto'],
                        $producto['nombre_categoria']
                    );
                }
                return $productoList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }



        # CU11 - Actualizar Producto
        public function actualizarProducto(){
            try {                
                $sql = 'UPDATE PRODUCTOS SET
                            productos_codigo = :productos_codigo,
                            nombre_producto = :nombre_producto,
                            categoria_codigo = :categoria_codigo
                        WHERE productos_codigo = :productos_codigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('productos_codigo', $this->getproductos_codigo());
                $stmt->bindValue('nombre_producto', $this->getnombre_producto());
                $stmt->bindValue('categoria_codigo', $this->getcategoria_codigo());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU12 - Obtener Producto por Id
        public function obtenerProductoPorId($productos_codigo){
            try {
                $sql = "SELECT * FROM PRODUCTOS WHERE productos_codigo = :productos_codigo";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('productos_codigo', $productos_codigo);
                $stmt->execute();
                $producto = $stmt->fetch();
                $producto = new Producto(
                    $producto['productos_codigo'],
                    $producto['nombre_producto'],
                    // $producto['nombre_categoria']
                    $producto['categoria_codigo']
                );
                return $producto;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        # CU08 - Eliminar Producto
        public function eliminarProducto($productos_codigo) {
            try {
                $sql = 'DELETE FROM PRODUCTOS WHERE productos_codigo = :productos_codigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('productos_codigo', $productos_codigo);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>