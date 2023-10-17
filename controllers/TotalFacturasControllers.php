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

        public function ConsultarTotalMensualFacturasPulpasNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesPulpasNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesPulpas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasCarnesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalMensualFacturasCarnesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesCarnesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMensualCarnesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasAbarrotesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalMensualFacturasAbarrotesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesAbarrotesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMensualAbarrotesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasFruverNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalMensualFacturasFruverNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesFruverNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMensualFruver.NC.view.php";
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

        public function ConsultarTotalFacturasPulpasBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPulpasBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasAbarrotesBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasFruverBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasCarnesBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasLacteosBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasPolloBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasPulpasSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPulpasSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasAbarrotesSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasFruverSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasCarnesSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasLacteosSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasPolloSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        public function ConsultarTotalFacturasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarFacturasTotal();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/consultar_factura/Total_facturas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

              
    }
?>