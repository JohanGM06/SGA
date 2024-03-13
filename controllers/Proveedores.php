<?php
session_start();

if (empty($_SESSION['id_usuario'])) {
?>
    <script language='JavaScript'>
        alert("Ingreso no correcto");
        location.href = "?c=Login&a=main";
    </script>
<?php
}
require_once "models/Proveedor.php";
class Proveedores{
    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Proveedor();
    }
    public function main(){
        require_once "views/Proveedor/proveedor.view.php";
    }
    public function nuevo()
    {
        if (isset($_REQUEST['id_proveedor'])) {
            $alm = $this->model->Obtener($_REQUEST['id_proveedor']);
            require_once "views/Proveedor/proveedor.update.php";
        } else {
            $alm = $this->model->Obtener(0);
            require_once "views/Proveedor/proveedor.new.php";
        }
    }
    public function Guardar()
    {
        $alm = new Proveedor();

        $alm->id_proveedor = $_REQUEST['id_proveedor'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->nit = $_REQUEST['nit'];
        $alm->correo = $_REQUEST['correo'];
        $alm->contacto_nombre = $_REQUEST['contacto_nombre'];
        $alm->contacto_cel = $_REQUEST['contacto_cel'];

        $alm->id_proveedor != "" ? $this->model->Actualizar($alm) : $this->model->Registrar($alm);
        header("Location:?c=Proveedores&a=main");
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header("Location:?c=Proveedores&a=main");
    }
}
