<?php session_start();
    require_once "models/TotalFacturas.php";
    class TotalFacturasControllers{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        
        public function ConsultarTotalFacturasPulpasNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/sumar_facturasNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasCarnesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasAbarrotesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasFruverNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasLacteosNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasPolloNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasPulpasSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPulpasSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasAbarrotesSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasFruverSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasCarnesSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasLacteosSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasPolloSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

              
    }
?>