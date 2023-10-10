<?php
    class FacturaModels{
        # Atributos
        private $dbh;
        protected $facturas_codigo;
        protected $valor_factura;
        protected $fecha;
        protected $categoria_codigo;
        protected $comedores_codigo;

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

        public function __construct5($facturas_codigo,$valor_factura,$fecha,$categoria_codigo,$comedores_codigo){
            $this->facturas_codigo = $facturas_codigo;
            $this->valor_factura = $valor_factura;
            $this->fecha = $fecha;
            $this->categoria_codigo = $categoria_codigo;
            $this->comedores_codigo = $comedores_codigo;
        }

        # Métodos: $facturas_codigo
        public function setfacturas_codigo($facturas_codigo){
            $this->facturas_codigo = $facturas_codigo;
        } 
        public function getfacturas_codigo(){
            return $this->facturas_codigo;
        } 

        # Métodos: $valor_factura
        public function setvalor_factura($valor_factura){
            $this->valor_factura = $valor_factura;
        } 
        public function getvalor_factura(){
            return $this->valor_factura;
        } 

        # Métodos: $fecha
        public function setfecha($fecha){
            $this->fecha = $fecha;
        } 
        public function getfecha(){
            return $this->fecha;
        }
        
        # Métodos: $categoria_codigo
        public function setcategoria_codigo($categoria_codigo){
            $this->categoria_codigo = $categoria_codigo;
        } 
        public function getcategoria_codigo(){
            return $this->categoria_codigo;
        } 

        # Métodos: $comedores_codigo
        public function setcomedores_codigo($comedores_codigo){
            $this->comedores_codigo = $comedores_codigo;
        } 
        public function getcomedores_codigo(){
            return $this->comedores_codigo;
        } 
        
        public function registrarFacturaModels() {
            try {
                $sql = 'INSERT INTO FACTURAS VALUES (
                            :facturas_codigo,
                            :valor_factura,
                            :fecha,
                            :categoria_codigo,
                            :comedores_codigo
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('facturas_codigo', $this->getfacturas_codigo());
                $stmt->bindValue('valor_factura', $this->getvalor_factura());
                $stmt->bindValue('fecha', $this->getfecha());
                $stmt->bindValue('categoria_codigo', $this->getcategoria_codigo());
                $stmt->bindValue('comedores_codigo', $this->getcomedores_codigo());            
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 

        #----CONSULTAR CATEGORIAS-----------/

        public function consultarFacturasModels() {
            try {
                $facturaList = [];
                $sql = 'SELECT facturas.facturas_codigo,facturas.valor_factura,facturas.fecha,categorias.nombre_categoria,comedores.nombre_comedor
                FROM facturas INNER JOIN comedores ON comedores.comedores_codigo = facturas.comedores_codigo
                              INNER JOIN categorias ON categorias.categoria_codigo = facturas.categoria_codigo';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $facturas) {
                    $facturaList[] = new FacturaModels(
                        $facturas['facturas_codigo'],
                        $facturas['valor_factura'],
                        $facturas['fecha'],
                        $facturas['nombre_categoria'],
                        $facturas['nombre_comedor'],
                    );
                }
                return $facturaList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // # CU11 - Actualizar Categoria
        // public function actualizarCategoria(){
        //     try {                
        //         $sql = 'UPDATE CATEGORIAS SET
        //                     categoria_codigo = :categoria_codigo,
        //                     usuario_codigo = :usuario_codigo,
        //                     nombre_categoria = :nombre_categoria
        //                 WHERE categoria_codigo = :categoria_codigo';
        //         $stmt = $this->dbh->prepare($sql);
        //         $stmt->bindValue('categoria_codigo', $this->getcategoria_codigo());
        //         $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
        //         $stmt->bindValue('nombre_categoria', $this->getnombre_categoria());
        //         $stmt->execute();
        //     } catch (Exception $e) {
        //         die($e->getMessage());
        //     }
        // }

        // # CU12 - Obtener Categoria por Id
        // public function obtenerCategoriaPorId($categoria_codigo){
        //     try {
        //         $sql = "SELECT * FROM CATEGORIAS WHERE categoria_codigo = :categoria_codigo";
        //         $stmt = $this->dbh->prepare($sql);
        //         $stmt->bindValue('categoria_codigo', $categoria_codigo);
        //         $stmt->execute();
        //         $categoria = $stmt->fetch();
        //         $categoria = new Categoria(
        //             $categoria['categoria_codigo'],
        //             $categoria['usuario_codigo'],
        //             $categoria['nombre_categoria']
        //         );
        //         return $categoria;
        //     } catch (Exception $e) {
        //         die($e->getMessage());
        //     }
        // }


        // # CU08 - Eliminar Categorias
        // public function eliminarCategoria($categoria_codigo) {
        //     try {
        //         $sql = 'DELETE FROM CATEGORIAS WHERE categoria_codigo = :categoria_codigo';
        //         $stmt = $this->dbh->prepare($sql);
        //         $stmt->bindValue('categoria_codigo', $categoria_codigo);
        //         $stmt->execute();
        //     } catch (Exception $e) {
        //         die($e->getMessage());
        //     }
        // }
    }
?>