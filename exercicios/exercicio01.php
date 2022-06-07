<?php
// criar tres atributos para as classes *curso - *professor - *disciplina;

declare(strict_types=1);

class Curso{
    public $nome;
    public $quantidadeSemestre;
    public $valor;
}

class professor{
    public $nome;
    public $salario; 
    public $disciplina;
}

class disciplina{
    public $materia;
    public $professor;
    public $notas;
}