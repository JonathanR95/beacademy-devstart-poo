<?php

Include 'Aluno.php';
Include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno(); //Objeto Aluno
$a1 -> nome = 'Jonathan';
$a1 ->cpf = '123.456.456-78';

$a1->nome .= ' Rodrigues';

$cursoPHP = new Curso();//objeto Curso
$cursoPHP -> nome = 'Introdução ao PHP';
$cursoPHP -> cargaHoraria = 88;
$cursoPHP -> descricao = 'Aprender o básico e intermediário do PHP';

echo "<h1>Aluno: {$a1->nome}</h1>";