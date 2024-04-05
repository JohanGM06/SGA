<?php
require_once "assets/dompdf/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

class Certificados_PDF
{
  // Propiedad PDO, inicialízala si es necesaria
  private $pdo;

  public function __CONSTRUCT()
  {
      try {
          $this->pdo = Database::conn();
      } catch (Exception $e) {
          die($e->getMessage());
      }
  }
  public function Usuarios()
  {
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);

    $dompdf = new Dompdf($options);
    $html = '
    <h1>aqui van los pdf</h1>
        ';

    $dompdf->loadHtml($html);
    $dompdf->render();

    // Cambié la opción 'Attachment' a 1 para que el PDF se descargue automáticamente
    $dompdf->stream('Usuarios.pdf', array('Attachment' => 0));
  }
}
