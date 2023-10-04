<?php session_start();
    require_once "models/Categoria.php";
    class Categorias{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        
        #------------REGISTRAR CATEGORIA------------//

        public function registrarCategorias(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/registrar_categoria/registrar_categoria.view.php";            
                require_once "views/roles/Admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $categorias = new Categoria(
                    $_POST['categoria_codigo'],
                    $_POST['usuario_codigo'],
                    $_POST['nombre_categoria']
                );
                $categorias->registrarCategoria();
                header("Location: ?c=Categorias&a=consultarCategoria");
            }            
        }

        #------------CONSULTAR CATEGORIA------------//

        public function consultarCategoria(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $categorias = new Categoria;
                $categorias = $categorias->consultarCategorias();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/registrar_categoria/read.categorias.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        public function consultarCategoriasReporte(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $categorias = new Categoria;
                $categorias = $categorias->consultarCategorias();
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/registrar_categoria/reporte_categorias.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }

        #-------------- ACTUALIZAR CATEGORIAS ------------- //

        // Actualizar Rol
        public function actualizarCategorias(){
            $rol = $_SESSION['rol'];
            if ($rol == 1) {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    $Categoria = new Categoria;
                    $Categoria = $Categoria->obtenerCategoriaPorId($_GET['categoria_codigo']);
                    require_once "views/roles/admin/header1.view.php";
                    require_once "views/modules/actualizar_categoria/actualizar_categoria.view.php";
                    require_once "views/roles/admin/footer.view.php";                
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $Categoria = new Categoria(
                        $_POST['categoria_codigo'],
                        $_POST['usuario_codigo'],
                        $_POST['nombre_categoria']
                    );                
                    $Categoria->actualizarCategoria();
                    header("Location: ?c=Categorias&a=consultarCategoria");
                }
            } else {                
                header("Location: ?c=Dashboard");
            }            
        }

        public function eliminarCategorias(){
            $Categoria = new Categoria;            
            $Categoria->eliminarCategoria($_GET['categoria_codigo']);
            header("Location: ?c=Categorias&a=consultarCategoria");
        }

              
    }
?>