<?php session_start();
    require_once "models/Producto.php";
    class Productos{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        
        #------------REGISTRAR CATEGORIA------------//

        public function registrarProductos(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/activosnofijos_alimentos/alimentos.view.php";            
                require_once "views/roles/Admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $productos = new Producto(
                    $_POST['productos_codigo'],
                    $_POST['nombre_producto'],
                    $_POST['categoria_codigo']
                );
                $productos->registrarProductos();
                header("Location: ?c=Productos&a=consultarProducto");
            }            
        }

        #------------CONSULTAR CATEGORIA------------//

        public function consultarProducto(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $producto = new Producto;
                $producto = $producto->consultarProductos();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/activosnofijos_alimentos/read.alimentos.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        public function consultarProductoReporte(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $producto = new Producto;
                $producto = $producto->consultarProductos();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/registrar_prod/reporte_producto.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        #-------------- ACTUALIZAR PRODUCTOS ------------- //

        // Actualizar PRODUCTOS
        public function actualizarProductos(){
            $rol = $_SESSION['rol'];
            if ($rol == 1) {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    $producto = new Producto;
                    $producto = $producto->obtenerProductoPorId($_GET['productos_codigo']);
                    require_once "views/roles/admin/header1.view.php";
                    require_once "views/modules/actualizar_producto/actualizar_producto.view.php";
                    require_once "views/roles/admin/footer.view.php";                
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $producto = new Producto(
                        $_POST['productos_codigo'],
                        $_POST['nombre_producto'],
                        $_POST['categoria_codigo']
                    );                
                    $producto->actualizarProducto();
                    header("Location: ?c=Productos&a=consultarProducto");
                }
            } else {                
                header("Location: ?c=Dashboard");
            }            
        }

        public function eliminarProductos(){
            $producto = new Producto;            
            $producto->eliminarProducto($_GET['productos_codigo']);
            header("Location: ?c=Productos&a=consultarProducto");
        }

              
    }
?>