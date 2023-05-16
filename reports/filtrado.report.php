<?php

require_once '../vendor/autoload.php';
require_once '../model/SuperHeroe.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {

  $superHero = new SuperHeroe();
  $data = $superHero->listarFiltrado($_GET['race_id'], $_GET['gender_id'],$_GET['bando_id']);
  $title = $_GET['title'];
  $title2 = $_GET['title2'];
  $title3 = $_GET['title3'];
  

    ob_start();
    include './estilos.report.html';
    include './Filtrado.data.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'fr');
    $html2pdf->writeHTML($content);
    $html2pdf->output('example01.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}