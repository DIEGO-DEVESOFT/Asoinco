<?php
    class Landing {
        public function __construct(){}
        // controladores pagina principal
        
        //Página principal
        // index.view.php
        public function index(){  
            
           require_once "views/business/header.view.php";
           require_once "views/business/index.view.php";
           require_once "views/business/links.php";  
           require_once "views/business/footer.view.php";          
        }

        // Misión Index
        public function mision(){            
            require_once "views/business/header.view.php";
            require_once "views/modules/mision_vision/mision.view.php";
            require_once "views/business/links.php";            
            require_once "views/business/footer.view.php";
        }

        // Visión Index
        public function vision(){            
            require_once "views/business/header.view.php";
            require_once "views/modules/mision_vision/vision.view.php";
            require_once "views/business/links.php";            
            require_once "views/business/footer.view.php";
        }

        // Historia Index
        public function historia(){            
            require_once "views/business/header.view.php";
            require_once "views/modules/mision_vision/historia.view.php";
            require_once "views/business/links.php";            
            require_once "views/business/footer.view.php";
        }

        // Proyectos Index
        public function proyecto(){            
            require_once "views/business/header.view.php";
            require_once "views/modules/mision_vision/proyecto.view.php";
            require_once "views/business/links.php";            
            require_once "views/business/footer.view.php";
        }

        // contactanos Index
        public function contactanos(){            
            require_once "views/business/header.view.php";
            require_once "views/modules/contactanos/contactanos.view.php";
            require_once "views/business/links.php";             
            require_once "views/business/footer.view.php";
        }
    
        // Olvido contraseña Index
        public function olvido_contraseña(){            
            require_once "views/business/header.view.php";
            require_once "views/business/olvidocontra.view.php";            
            require_once "views/business/footer.view.php";
        }

        // Vistas de sesión iniciada

        // Calidad humana: Empleados, Beneficiarios, Crear rol y Tabla aspirantes.

        
        // Módulo Inventario

        // Activos No Fijos o Alimentos
        public function alimentos(){
            require_once "views/roles/business/header1.php";
            require_once "views/modules/activosnofijos_alimentos/alimentos.view.php";
            require_once "views/business/footer.view.php";
        }

        //Salida del Kardex diario en Activos No fijos o Alimentos
        //Kardex
        public function kardex(){
            require_once "views/roles/business/header1.php";
            require_once "views/modules/kardex/kardex.view.php";
            require_once "views/business/footer.view.php";
        }

        // Dotación
        public function dotacion(){            
            require_once "views/roles/business/header1.php";
            require_once "views/modules/dotacion/dotacion.view.php";            
            require_once "views/business/footer.view.php";
        }


        //Salida de dotación en dotación
        //salidadotación
        public function salidadotacion(){            
            require_once "views/roles/business/header1.php";
            require_once "views/modules/salidadotacion/salidadotacion.php";            
            require_once "views/business/footer.view.php";
        }

        //Activos Fijos o elementos fisicos
        //elementosfisicos
        public function elementosfisicos(){            
            require_once "views/roles/business/header1.php";
            require_once "views/modules/activosfijos_elementosfisicos/elementosfisicos.php";            
            require_once "views/business/footer.view.php";
        }

        //Salida de Activos Fijos o elemtnos fisicos
        //egresoelementosfisicos
        public function egresoelementosfisicos(){            
            require_once "views/roles/business/header1.php";
            require_once "views/modules/salida_activos_fijos/salidaelementosfisicos.php";            
            require_once "views/business/footer.view.php";
        }


        // REGISTRAR PRODUCTO
        public function registrar_producto(){
            require_once "views/roles/business/header1.php";
            require_once "views/modules/registrar_prod/Registrar_Producto.php";
            require_once "views/business/footer.view.php";
        }
    
    
        public function link(){            
            require_once "views/business/links.php";            
        }

    }
?>