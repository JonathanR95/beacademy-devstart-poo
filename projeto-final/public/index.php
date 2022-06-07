<?php

ini_set('display_errors',1);

include '../vendor/autoload.php';

use App\Controller\IndexController;

$c = new IndexController();
//$c-> indexAction();
$c -> loginAction();

//echo "Olá mundo";