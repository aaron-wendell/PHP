<?php

$notas = [[
    'aluno' => 'Maria', 
    'nota' => 10,
],
[
    'aluno' => 'Vinicius', 
    'nota' => 8,
],
[
    'aluno' => 'Ana', 
    'nota' => 9,
],
];


$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas';
var_dump($notas);

echo 'Ordenadas';
var_dump($notasOrdenadas);

usort(function (array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota']; //ordenação das notas de forma crescente
    //ordenação das notas de forma decrescente ==> return $nota2['nota'] <=> $nota1['nota']; 
});
var_dump($notas);

$notas2 = [
    'Maria' => 10,
    'Vinicius' => 8,
    'Ana' => 9,
    'Roberto' => 7
];

krsort($notas2);
var_dump($notas2);

