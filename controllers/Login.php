<?php
require_once "models/Log.php";
class Login
{
    private $pdo;
    private $model;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = DataBase::conn();
            $this->model = new Log();
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
    public function Login()

    {
        if ($_POST) {
            session_start();

            try {
                $user = $_POST['usuario'];
                $pass = $_POST['contraseña'];

                $stmt = $this->pdo->prepare(
                    "SELECT * FROM usuario WHERE usuario = :user AND contraseña = :pass");
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
        session_start();

        if (empty($_SESSION['id_usuario'])) {
            ?>
            <script language='JavaScript'>
                location.href = "?c=Login&a=main";
            </script>
<?php
        }

        require_once "views/encabezado.php";
        require_once "views/pie.php";
        require_once "views/Principal/principal.php";
    }
}
