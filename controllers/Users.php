<?php session_start();
    require_once "models/User.php";
    // require_once "models/Categoria.php";
    class Users{
        public function __construct(){}
        public function index(){
            header("Location: ?c=Dashboard");
        }
        public function registrarUsuarios(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once "views/roles/Admin/header1.view.php";
                require_once "views/modules/registronc/registronc.view.php";            
                require_once "views/roles/Admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User(
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $_POST['userName'],
                    $_POST['userLastName'],
                    $_POST['userEmail'],
                    $_POST['userPass'],
                    $_POST['userStatus']
                );
                $user->registrarUsuario();
                // header("Location: ?c=Users&a=consultarEmpleados");
                header("Location: ?c=Users&a=consultarUsuarios");
            }            
        }

      
        public function consultarBeneficiario(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = new User;
                $users = $users->consultarBeneficiarios();
                require_once "views/roles/admin/header1.view.php";
                require_once "views/modules/beneficiarios/beneficiarios.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }


        public function consultarAspirante(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = new User;
                $users = $users->consultarAspirantes();
                require_once "views/roles/admin/header1.view.php";
                require_once "views/modules/aspirantes/aspirantes.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }


        

        public function consultarEmpleados(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = new User;
                $users = $users->consultarUsuarios();
                require_once "views/roles/admin/header1.view.php";
                require_once "views/modules/empleados/read.empleado.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }


        public function consultarUsuarios(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = new User;
                $users = $users->consultarUsuarios();
                require_once "views/roles/admin/header1.view.php";
                require_once "views/modules/read_user/read.users.view.php";
                require_once "views/roles/admin/footer.view.php";
            }            
        }
        public function actualizarUsuarios() {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $user = new User;
                $user = $user->obtenerUserPorId($_GET['codigoUser']);
                require_once "views/roles/admin/header1.view.php";
                require_once "views/modules/read_user/update.users.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User(                    
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $_POST['userName'],
                    $_POST['userLastName'],
                    $_POST['userEmail'],
                    $_POST['userPass'],
                    $_POST['userStatus']
                );                
                // print_r($user);
                $user->actualizarUsuario();
                header("Location: ?c=Users&a=consultarUsuarios");
            }
        }
        public function eliminarUsuarios() {
            $user = new User;            
            $user->eliminarUsuario($_GET['codigoUser']);
            header("Location: ?c=Users&a=consultarUsuarios");
        }
        
    }
?>