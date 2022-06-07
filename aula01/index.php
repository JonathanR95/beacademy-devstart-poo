<?php

ini_set('display_errors',1);

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1 -> setNome('Jonathan');
$p1 -> setCpf('08912305601');
$p1 -> setSalario(1000);

var_dump($p1);