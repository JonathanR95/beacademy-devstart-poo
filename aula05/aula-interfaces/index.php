<?php

ini_set('display_errors', 1);

include 'Validar.php';
include 'ValidarBr.php';
include 'ValidarUS.php';

$cpf = '12345645654';
$doc = '12345678912345';

$br = new ValidarBr();
$br-> validarDocumento($cpf);

$us = new ValidarUS();
$us -> validarDocumento($doc);



echo 'Funcionou';