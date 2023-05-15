<?php

require_once '../vendor/autoload.php';
require_once '../model/SuperHeroe.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {

    //Instanciamos la clase SuperHero
    $superhero = new SuperHeroe();
    $datos = $superhero->listarSuperHeroes($_GET['publisher_id']);
    $titulo = $_GET['titulo'];

    ob_start();

    include './estilos.report.html';
    include './superhero.data.php';

  
 
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es');
    $html2pdf->writeHTML($content);
    $html2pdf->output('SuperHero.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}