<?php

ini_set('display_errors',1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('roupas', 'roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas de rosto');
$c3 = new Categoria('Calçados','Tenis para corrida');


$p1 = new Produto('Tênis', 299, $c3);
$p1-> setDescricao('Tênis para corrida profissional');
//$p1 -> setNome('Tênis para corrida');
//$p1 -> setValor(299);


$p2 = new Produto('Saia Jeans', 100, $c1);
//$p2 -> setNome ('Saia Jeans');
//$p2 -> setValor (100);

$p3 = new Produto('Calça Branca', 159.78, $c1);
//$p3 -> setNome('Calça Branca');

var_dump($p1);
var_dump($p2);
var_dump($p3);