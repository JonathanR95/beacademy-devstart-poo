<?php

ini_set('display_errors',1);

include 'vendor/autoload.php';

use Classes\Config\Usuario;
use Classes\Categoria;
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '';
for($n = 0; $n < 10; $n++){
    $html .= 'ó o pente! <br>';
}

$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP</h1>'. $html);

$dompdf->render();

$dompdf->stream();