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

              
    }
?>