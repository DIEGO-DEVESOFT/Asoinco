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

              
    }
?>