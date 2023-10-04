<?php
    class Categoria{
        # Atributos
        private $dbh;
        protected $categoria_codigo;
        protected $usuario_codigo;
        protected $nombre_categoria;

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

        public function __construct2($categoria_codigo, $nombre_categoria){
            $this->categoria_codigo = $categoria_codigo;
            $this->nombre_categoria = $nombre_categoria;
        }


        public function __construct3($categoria_codigo, $usuario_codigo,$nombre_categoria){
            $this->categoria_codigo = $categoria_codigo;
            $this->usuario_codigo = $usuario_codigo;
            $this->nombre_categoria = $nombre_categoria;
        }

        # Métodos: $categoria_codigo
        public function setcategoria_codigo($categoria_codigo){
            $this->categoria_codigo = $categoria_codigo;
        } 
        public function getcategoria_codigo(){
            return $this->categoria_codigo;
        } 
        # Métodos: $usuario_codigo
        public function setusuario_codigo($usuario_codigo){
            $this->usuario_codigo = $usuario_codigo;
        } 
        public function getusuario_codigo(){
            return $this->usuario_codigo;
        } 

        # Métodos: $nombre_categoria
        public function setnombre_categoria($nombre_categoria){
            $this->nombre_categoria = $nombre_categoria;
        } 
        public function getnombre_categoria(){
            return $this->nombre_categoria;
        } 
        
        public function registrarCategoria() {
            try {
                $sql = 'INSERT INTO CATEGORIAS VALUES (
                            :categoria_codigo,
                            :usuario_codigo,
                            :nombre_categoria
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('categoria_codigo', $this->getcategoria_codigo());
                $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
                $stmt->bindValue('nombre_categoria', $this->getnombre_categoria());            
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 

        #----CONSULTAR CATEGORIAS-----------/

        public function consultarCategorias() {
            try {
                $categoriaList = [];
                $sql = 'SELECT * FROM categorias WHERE categorias.categoria_codigo = categorias.categoria_codigo';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $categorias) {
                    $categoriaList[] = new Categoria(
                        $categorias['categoria_codigo'],
                        $categorias['usuario_codigo'],
                        $categorias['nombre_categoria']
                    );
                }
                return $categoriaList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU11 - Actualizar Categoria
        public function actualizarCategoria(){
            try {                
                $sql = 'UPDATE CATEGORIAS SET
                            categoria_codigo = :categoria_codigo,
                            usuario_codigo = :usuario_codigo,
                            nombre_categoria = :nombre_categoria
                        WHERE categoria_codigo = :categoria_codigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('categoria_codigo', $this->getcategoria_codigo());
                $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
                $stmt->bindValue('nombre_categoria', $this->getnombre_categoria());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU12 - Obtener Categoria por Id
        public function obtenerCategoriaPorId($categoria_codigo){
            try {
                $sql = "SELECT * FROM CATEGORIAS WHERE categoria_codigo = :categoria_codigo";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('categoria_codigo', $categoria_codigo);
                $stmt->execute();
                $categoriasDb = $stmt->fetch();
                $categoria = new Categoria(
                    $categoriasDb['categoria_codigo'],
                    $categoriasDb['usuario_codigo'],
                    $categoriasDb['nombre_categoria']
                );
                return $categoria;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        # CU08 - Eliminar Categorias
        public function eliminarCategoria($categoria_codigo) {
            try {
                $sql = 'DELETE FROM CATEGORIAS WHERE categoria_codigo = :categoria_codigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('$categoria_codigo', $categoria_codigo);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>