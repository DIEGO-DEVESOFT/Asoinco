<?php
    class TotalFacturas{
        # Atributos
        private $dbh;
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
        
        public function __construct3($valor_factura, $nombre_categoria, $nombre_comedor){
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


    }
?>