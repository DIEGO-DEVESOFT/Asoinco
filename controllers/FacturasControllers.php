<?php session_start();
    require_once "models/FacturaModels.php";
    require_once "models/TotalFacturas.php";
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

        public function consultarFacturasControllersReporte(){
             if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                 $facturas = new FacturaModels;
                 $facturas = $facturas->consultarFacturasModels();
                 require_once "views/roles/Admin/header1.view.php";
                 require_once "views/modules/consultar_factura/reporte_facturas.view.php";
                 require_once "views/roles/admin/footer.view.php";
             }            
        }

        // Consultar Facturas Nuevo Chile

        public function consultarFacturasControllersNuevoChileReporte(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $facturas = new FacturaModels;
                $facturas = $facturas->consultarFacturasModelsNuevoChile();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/consultar_factura/NuevoChile_facturas.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        // Consultar Facturas Semillas


        public function consultarFacturasControllersSemillasReporte(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $facturas = new FacturaModels;
                $facturas = $facturas->consultarFacturasModelsSemillas();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/consultar_factura/Semillas_facturas.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        // Consultar Facturas Buenavista


        public function consultarFacturasControllersBuenavistaReporte(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $facturas = new FacturaModels;
                $facturas = $facturas->consultarFacturasModelsBuenavista();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/consultar_factura/reporte_facturas.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        // Consultar Facturas Santa Cecilia

        public function consultarFacturasControllersSantaCeciliaReporte(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $facturas = new FacturaModels;
                $facturas = $facturas->consultarFacturasModelsSantaCecilia();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/consultar_factura/reporte_facturas.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        // #-------------- ACTUALIZAR CATEGORIAS ------------- //

        // // Actualizar Rol
         public function actualizarFacturasControllers(){
             $rol = $_SESSION['rol'];
             if ($rol == 1) {
                 if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                     $facturas = new FacturaModels;
                     $facturas = $facturas->obtenerFacturaPorId($_GET['facturas_codigo']);
                     require_once "views/roles/admin/header1.view.php";
                     require_once "views/modules/actualizar_facturas/actualizar_facturas.view.php";
                     require_once "views/roles/admin/footer.view.php";                
                 }
                 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                     $facturas = new FacturaModels(
                         $_POST['facturas_codigo'],
                         $_POST['valor_factura'],
                         $_POST['fecha'],
                         $_POST['categoria_codigo'],
                         $_POST['comedores_codigo']
                     );                
                     $facturas->actualizarFacturaModels();
                     header("Location: ?c=FacturasControllers&a=consultarFacturasControllers");
                 }
             } else {                
                 header("Location: ?c=Dashboard");
             }            
         }

        public function eliminarFacturasControllers(){
             $facturas = new FacturaModels;            
             $facturas->eliminarFacturaModels($_GET['facturas_codigo']);
             header("Location: ?c=FacturasControllers&a=consultarFacturasControllers");
        }


        

              
    }
?>