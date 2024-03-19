<?php
class Login
{
    private $pdo;
 
    public function __construct()
    
    {
   

        try {
            $this->pdo = DataBase::conn();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function main()
    { {
            if (session_start() == true) {
                session_destroy();
                
        
               
                require_once "views/Login/Login.view.php";
            }
        }
    }
    public function login()

    {
        if ($_POST) {
            session_start();

            try {
                $user = $_POST['usuario'];
                $pass = $_POST['contraseña'];

                $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE usuario = :user AND contraseña = :pass");
                $stmt->bindParam(':user', $user);
                $stmt->bindParam(':pass', $pass);
                $stmt->execute();

                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($usuario) {
                    $_SESSION['id_usuario'] = $usuario['id_usuario'];
                    $_SESSION['nombre'] = $usuario['nombre'];
                    $_SESSION['permiso'] = $usuario['permiso'];

                    header("Location:?c=Login&a=menu");

                } else {
?>
                    <script language='JavaScript'>
                        alert("Acceso denegado");
                        location.href = "?c=Login&a=main";
                    </script>
<?php
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
    public function menu()
    {
        require_once "views/encabezado.php";
        require_once "views/pie.php";
        require_once "views/Principal/Principal.php";
    //    require_once "views/Principal/principal.php";
    }
}
