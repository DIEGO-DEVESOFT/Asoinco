<?php
    class TotalFacturas{
        # Atributos
        private $dbh;
        protected $FechaMesFactura;
        protected $valor_factura;
        protected $nombre_categoria;
        protected $nombre_comedor;

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

        public function __construct1($valor_factura){
            $this->valor_factura = $valor_factura;
        }
        
        public function __construct3($valor_factura, $nombre_categoria, $nombre_comedor){
            $this->valor_factura = $valor_factura;
            $this->nombre_categoria = $nombre_categoria;
            $this->nombre_comedor = $nombre_comedor;
            
        }

        public function __construct4($FechaMesFactura,$valor_factura, $nombre_categoria, $nombre_comedor){
            $this->FechaMesFactura = $FechaMesFactura;
            $this->valor_factura = $valor_factura;
            $this->nombre_categoria = $nombre_categoria;
            $this->nombre_comedor = $nombre_comedor;
            
        }

        # Métodos: $valor_factura
        public function setvalor_factura($valor_factura){
            $this->valor_factura = $valor_factura;
        } 
        public function getvalor_factura(){
            return $this->valor_factura;
        } 

        # Métodos: $nombre_categoria
        public function setnombre_categoria($nombre_categoria){
            $this->$nombre_categoria = $nombre_categoria;
        } 
        public function getnombre_categoria(){
            return $this->nombre_categoria;
        } 

        # Métodos: $nombre_comedor
        public function setnombre_comedor($nombre_comedor){
            $this->nombre_comedor = $nombre_comedor;
        } 
        public function getnombre_comedor(){
            return $this->nombre_comedor;
        }

        # Métodos: $FechaMesFactura
        public function setFechaMesFactura($FechaMesFactura){
            $this->FechaMesFactura = $FechaMesFactura;
        } 
        public function getFechaMesFactura(){
            return $this->FechaMesFactura;
        }
        
        #Sumar Facturas Pulpas Nuevo Chile

        public function ConsultarTotalFacturasPulpasNuevoChileModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPulpasNuevoChile, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 1';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPulpasNuevoChile'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Pulpas Nuevo Chile

        public function ConsultarTotalFacturasMesPulpasNuevoChileModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 1 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Abarrotes Nuevo Chile

        public function ConsultarTotalFacturasAbarrotesNuevoChileModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalAbarrotesNuevoChile, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 5';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalAbarrotesNuevoChile'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Abarrotes Nuevo Chile

        public function ConsultarTotalFacturasMesAbarrotesNuevoChileModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 5 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Fruver Nuevo Chile

        public function ConsultarTotalFacturasFruverNuevoChileModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalFruverNuevoChile, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 4';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalFruverNuevoChile'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Fruver Nuevo Chile

        public function ConsultarTotalFacturasMesFruverNuevoChileModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 4 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Carnes Nuevo Chile

        public function ConsultarTotalFacturasCarnesNuevoChileModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalCarnesNuevoChile, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 2';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalCarnesNuevoChile'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Carnes Nuevo Chile

        public function ConsultarTotalFacturasMesCarnesNuevoChileModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 2 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Lacteos Nuevo Chile

        public function ConsultarTotalFacturasLacteosNuevoChileModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalLacteosNuevoChile, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 3';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalLacteosNuevoChile'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Lacteos Nuevo Chile

        public function ConsultarTotalFacturasMesLacteosNuevoChileModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 3 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Pollo Nuevo Chile

        public function ConsultarTotalFacturasPolloNuevoChileModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPolloNuevoChile, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 6';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPolloNuevoChile'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Pollo Nuevo Chile

        public function ConsultarTotalFacturasMesPolloNuevoChileModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 2 AND categorias.categoria_codigo = 6 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Pulpas Semillas

        public function ConsultarTotalFacturasPulpasSemillasModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPulpasSemillas, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 1';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPulpasSemillas'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Pulpas Semillas

        public function ConsultarTotalFacturasMesPulpasSemillasModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 1 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Abarrotes Semillas

        public function ConsultarTotalFacturasAbarrotesSemillasModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalAbarrotesSemillas, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 5';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalAbarrotesSemillas'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Abarrotes Semillas

        public function ConsultarTotalFacturasMesAbarrotesSemillasModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 5 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Fruver Semillas

        public function ConsultarTotalFacturasFruverSemillasModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalFruverSemillas, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 4';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalFruverSemillas'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Fruver Semillas

        public function ConsultarTotalFacturasMesFruverSemillasModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 4 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Carnes Semillas

        public function ConsultarTotalFacturasCarnesSemillasModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalCarnesSemillas, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 2';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalCarnesSemillas'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Carnes Semillas

        public function ConsultarTotalFacturasMesCarnesSemillasModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 2 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Lacteos Semillas

        public function ConsultarTotalFacturasLacteosSemillasModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalLacteosSemillas, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 3';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalLacteosSemillas'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Lacteos Semillas

        public function ConsultarTotalFacturasMesLacteosSemillasModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 3 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Pollo Semillas

        public function ConsultarTotalFacturasPolloSemillasModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPolloSemillas, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 6';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPolloSemillas'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Pollo Semillas

        public function ConsultarTotalFacturasMesPolloSemillasModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 3 AND categorias.categoria_codigo = 6 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Pulpas Buenavista

        public function ConsultarTotalFacturasPulpasBuenavistaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPulpasBuenavista, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 1';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPulpasBuenavista'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Pulpas Buenavista

        public function ConsultarTotalFacturasMesPulpasBuenavistaModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 1 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Abarrotes Buenavista

        public function ConsultarTotalFacturasAbarrotesBuenavistaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalAbarrotesBuenavista, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 5';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalAbarrotesBuenavista'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Abarrotes Buenavista

        public function ConsultarTotalFacturasMesAbarrotesBuenavistaModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 5 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Fruver Buenavista

        public function ConsultarTotalFacturasFruverBuenavistaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalFruverBuenavista, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 4';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalFruverBuenavista'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Fruver Buenavista

        public function ConsultarTotalFacturasMesFruverBuenavistaModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 4 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Carnes Buenavista

        public function ConsultarTotalFacturasCarnesBuenavistaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalCarnesBuenavista, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 2';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalCarnesBuenavista'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Mensual Carnes Buenavista

        public function ConsultarTotalFacturasMesCarnesBuenavistaModels() {
            try {
                $facturaTotalMesList = [];
                 $sql = 'SELECT 
                 DATE_FORMAT(facturas.fecha,"%Y-%m") AS mes,
                 SUM(facturas.valor_factura) AS ValorMensualCategorias, 
                 comedores.nombre_comedor, 
                 categorias.nombre_categoria
                 FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                               INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                               WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 2 GROUP BY mes';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalMesList[] = new TotalFacturas(
                        $facturaTotal['mes'],
                        $facturaTotal['ValorMensualCategorias'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalMesList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Lacteos Buenavista

        public function ConsultarTotalFacturasLacteosBuenavistaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalLacteosBuenavista, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 3';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalLacteosBuenavista'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Pollo Buenavista

        public function ConsultarTotalFacturasPolloBuenavistaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPolloBuenavista, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 1 AND categorias.categoria_codigo = 6';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPolloBuenavista'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Pulpas Santa Cecilia

        public function ConsultarTotalFacturasPulpasSantaCeciliaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPulpasSantaCecilia, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 4 AND categorias.categoria_codigo = 1';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPulpasSantaCecilia'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Abarrotes Santa Cecilia

        public function ConsultarTotalFacturasAbarrotesSantaCeciliaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalAbarrotesSantaCecilia, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 4 AND categorias.categoria_codigo = 5';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalAbarrotesSantaCecilia'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Fruver Santa Cecilia

        public function ConsultarTotalFacturasFruverSantaCeciliaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalFruverSantaCecilia, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 4 AND categorias.categoria_codigo = 4';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalFruverSantaCecilia'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Carnes Santa Cecilia

        public function ConsultarTotalFacturasCarnesSantaCeciliaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalCarnesSantaCecilia, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 4 AND categorias.categoria_codigo = 2';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalCarnesSantaCecilia'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Lacteos Santa Cecilia

        public function ConsultarTotalFacturasLacteosSantaCeciliaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalLacteosSantaCecilia, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 4 AND categorias.categoria_codigo = 3';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalLacteosSantaCecilia'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Sumar Facturas Pollo Santa Cecilia

        public function ConsultarTotalFacturasPolloSantaCeciliaModels() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalPolloSantaCecilia, comedores.nombre_comedor, categorias.nombre_categoria
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo 
                              WHERE facturas.comedores_codigo = 4 AND categorias.categoria_codigo = 6';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalPolloSantaCecilia'],
                        $facturaTotal['nombre_categoria'],
                        $facturaTotal['nombre_comedor'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        #Consultar Facturas Total

        public function consultarFacturasTotal() {
            try {
                $facturaTotalList = [];
                $sql = 'SELECT SUM(valor_factura) AS ValorTotalComedores FROM facturas';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturaTotal) {
                    $facturaTotalList[] = new TotalFacturas(
                        $facturaTotal['ValorTotalComedores'],
                    );
                }
                return $facturaTotalList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


    }
