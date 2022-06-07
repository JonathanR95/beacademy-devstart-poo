<?php

include 'Usuario.php';
include 'Cliente.php';
include 'ClienteVip.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

$c1 = new Cliente('chiquim@email.com', '123456');
$c1 -> setNome('Chiqim');
$c1 -> setDataCadastro('01/01/2019');

$cpf = "123456789";

$validador = new Validar();
$validador->validarCpf($cpf);

$c1 -> setCpf($cpf);

$g1 = new Gestor('zezim@email.com','456123',6000);
//$g1 = new Gestor(6000);
$g1 -> setNome('Zezim');
//$g1 ->setSalario(6000);

$gg1 = new GestorGeral('maria@email.com','12fre12',9000);

//$us1 = new Usuario('hacker@email.com', '111111');



var_dump($c1);
var_dump($g1); 
var_dump($gg1);
