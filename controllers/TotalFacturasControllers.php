<?php session_start();
    require_once "models/TotalFacturas.php";
    class TotalFacturasControllers{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE PULPAS NUEVO CHILE
        
        public function ConsultarTotalFacturasPulpasNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/sumar_facturasNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE PULPAS NUEVO CHILE

        public function ConsultarTotalMensualFacturasPulpasNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesPulpasNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesPulpas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE CARNES NUEVO CHILE

        public function ConsultarTotalFacturasCarnesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE CARNES NUEVO CHILE

        public function ConsultarTotalMensualFacturasCarnesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesCarnesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMensualCarnesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE ABARROTES NUEVO CHILE

        public function ConsultarTotalFacturasAbarrotesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE ABARROTES NUEVO CHILE

        public function ConsultarTotalMensualFacturasAbarrotesNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesAbarrotesNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMensualAbarrotesNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE FRUVER NUEVO CHILE

        public function ConsultarTotalFacturasFruverNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE FRUVER NUEVO CHILE

        public function ConsultarTotalMensualFacturasFruverNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesFruverNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMensualFruver.NC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE LACTEOS NUEVO CHILE

        public function ConsultarTotalFacturasLacteosNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE LACTEOS NUEVO CHILE

        public function ConsultarTotalMensualFacturasLacteosNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesLacteosNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesLacteosNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE POLLO NUEVO CHILE

        public function ConsultarTotalFacturasPolloNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE POLLO NUEVO CHILE

        public function ConsultarTotalMensualFacturasPolloNuevoChileControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesPolloNuevoChileModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesPolloNC.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE PULPAS SEMILLAS

        public function ConsultarTotalFacturasPulpasSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPulpasSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE PULPAS SEMILLAS

        public function ConsultarTotalMensualFacturasPulpasSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesPulpasSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesPulpasSemillas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE ABARROTES SEMILLAS

        public function ConsultarTotalFacturasAbarrotesSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE ABARROTES SEMILLAS

        public function ConsultarTotalMensualFacturasAbarrotesSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesAbarrotesSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesAbarrotesSemillas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE FRUVER SEMILLAS

        public function ConsultarTotalFacturasFruverSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE FRUVER SEMILLAS

        public function ConsultarTotalMensualFacturasFruverSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesFruverSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesFruverSemillas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE CARNES SEMILLAS

        public function ConsultarTotalFacturasCarnesSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE CARNES SEMILLAS

        public function ConsultarTotalMensualFacturasCarnesSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesCarnesSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesCarnesSemillas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE LACTEOS SEMILLAS

        public function ConsultarTotalFacturasLacteosSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE LACTEOS SEMILLAS

        public function ConsultarTotalMensualFacturasLacteosSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesLacteosSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesLacteosSemillas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE POLLO SEMILLAS

        public function ConsultarTotalFacturasPolloSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloSM.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE POLLO SEMILLAS

        public function ConsultarTotalMensualFacturasPolloSemillasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesPolloSemillasModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesPolloSemillas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE PULPAS BUENAVISTA

        public function ConsultarTotalFacturasPulpasBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPulpasBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE PULPAS BUENAVISTA

        public function ConsultarTotalMensualFacturasPulpasBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesPulpasBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesPulpasBuenavista.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE ABARROTES BUENAVISTA

        public function ConsultarTotalFacturasAbarrotesBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE ABARROTES BUENAVISTA

        public function ConsultarTotalMensualFacturasAbarrotesBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesAbarrotesBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesAbarrotesBuenavista.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE FRUVER BUENAVISTA

        public function ConsultarTotalFacturasFruverBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE FRUVER BUENAVISTA

        public function ConsultarTotalMensualFacturasFruverBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesFruverBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesFruverBuenavista.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE CARNES BUENAVISTA

        public function ConsultarTotalFacturasCarnesBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE CADA MES DE LAS FACTURAS DE CARNES BUENAVISTA

        public function ConsultarTotalMensualFacturasCarnesBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasMesCarnesBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalMesCarnesBuenavista.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE LACTEOS BUENAVISTA

        public function ConsultarTotalFacturasLacteosBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE POLLO BUENAVISTA

        public function ConsultarTotalFacturasPolloBuenavistaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloBuenavistaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloBV.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE PULPAS SANTA CECILIA

        public function ConsultarTotalFacturasPulpasSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPulpasSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPulpasSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE ABARROTES SANTA CECILIA

        public function ConsultarTotalFacturasAbarrotesSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasAbarrotesSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalAbarrotesSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE FRUVER SANTA CECILIA

        public function ConsultarTotalFacturasFruverSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasFruverSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalFruverSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE CARNES SANTA CECILIA

        public function ConsultarTotalFacturasCarnesSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasCarnesSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalCarnesSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE LACTEOS SANTA CECILIA

        public function ConsultarTotalFacturasLacteosSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasLacteosSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalLacteosSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE POLLO SANTA CECILIA

        public function ConsultarTotalFacturasPolloSantaCeciliaControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarTotalFacturasPolloSantaCeciliaModels();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/sumar_facturas/TotalPolloSantaCecilia.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

        #CONSULTAR EL TOTAL DE LAS FACTURAS DE TODOS LOS COMEDORES.

        public function ConsultarTotalFacturasControllers(){
            $facturasTotal = new TotalFacturas;            
            $facturasTotal = $facturasTotal->ConsultarFacturasTotal();
            require_once "views/roles/Admin/header1.view.php";
            require_once "views/modules/consultar_factura/Total_facturas.view.php";
            require_once "views/roles/admin/footer.view.php";   
        }

              
    }
?>