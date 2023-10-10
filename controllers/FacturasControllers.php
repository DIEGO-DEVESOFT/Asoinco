<?php session_start();
    require_once "models/FacturaModels.php";
    class FacturasControllers{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        
        #------------REGISTRAR CATEGORIA------------//

        public function registrarFacturasControllers(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/registrar_factura/registrar_factura.view.php";            
                require_once "views/roles/Admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $facturas = new FacturaModels(
                    $_POST['facturas_codigo'],
                    $_POST['valor_factura'],
                    $_POST['fecha'],
                    $_POST['categoria_codigo'],
                    $_POST['comedores_codigo']
                );
                $facturas->registrarFacturaModels();
                header("Location: ?c=FacturasControllers&a=consultarFacturasControllers");
            }            
        }

        #------------CONSULTAR CATEGORIA------------//

        public function consultarFacturasControllers(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $facturas = new FacturaModels;
                $facturas = $facturas->consultarFacturasModels();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/consultar_factura/read.facturas.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        // public function consultarCategoriasReporte(){
        //     if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        //         $categorias = new Categoria;
        //         $categorias = $categorias->consultarCategorias();
        //         require_once "views/roles/Admin/header1.view.php";
        //         require_once "views/modules/registrar_categoria/reporte_categorias.view.php";
        //         require_once "views/roles/admin/footer.view.php";
        //     }            
        // }

        // #-------------- ACTUALIZAR CATEGORIAS ------------- //

        // // Actualizar Rol
        // public function actualizarCategorias(){
        //     $rol = $_SESSION['rol'];
        //     if ($rol == 1) {
        //         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        //             $categoria = new Categoria;
        //             $categoria = $categoria->obtenerCategoriaPorId($_GET['categoria_codigo']);
        //             require_once "views/roles/admin/header1.view.php";
        //             require_once "views/modules/actualizar_categoria/actualizar_categoria.view.php";
        //             require_once "views/roles/admin/footer.view.php";                
        //         }
        //         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //             $categoria = new Categoria(
        //                 $_POST['categoria_codigo'],
        //                 $_POST['usuario_codigo'],
        //                 $_POST['nombre_categoria']
        //             );                
        //             $categoria->actualizarCategoria();
        //             header("Location: ?c=Categorias&a=consultarCategoria");
        //         }
        //     } else {                
        //         header("Location: ?c=Dashboard");
        //     }            
        // }

        // public function eliminarCategorias(){
        //     $categoria = new Categoria;            
        //     $categoria->eliminarCategoria($_GET['categoria_codigo']);
        //     header("Location: ?c=Categorias&a=consultarCategoria");
        // }

              
    }
?>