<?php

$notas = [
    'Maria' => '10',
    'Vinicius' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Juca' => null
];

krsort($notas);
var_dump($notas);

if(is_array($notas)){
    echo 'Sim, é um array'.PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Ana fez a prova: '.PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguem tirou 10: '.PHP_EOL;
var_dump(in_array(10, $notas, true)); //true faz com que a verificacao seja estrita, mudando o == para ===

echo 'Quem tirou 10: '.PHP_EOL;
var_dump(array_search(10, $notas));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula

$notasBimestre1 = [
    'Maria' => 10,
    'Vinicius' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Juca' => 6
];

$notasBimestre2 = [
    'Maria' => 3,
    'Ana' => 9,
    'Roberto' => 7,
    'Juca' => 8
];

var_dump(array_diff($notasBimestre1, $notasBimestre2));
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// array_diff retorna elementos que contem no primeiro array mas nao existem nos proximos array, 
//  mas levando em consideração apenas o valor
// array_diff_key leva em consideração apenas a chave

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
// array_combine junta as chaves de um array com os valores de outro array
// para array_combine funcionar a quantidade de elementos dos 2 arrays devem ser iguais

var_dump(array_flip($alunosFaltantes));
// array_flip inverte a chave com o valor

$alunos2021 = [
    'Maria',
    'Vinicius',
    'Ana',
    'Roberto',
    'Juca'
];

$alunosNovos = [
    'Nico',
    'Visconde',
    'Beto',
    'Daiane',
    'Kilderson',
    'Anderson'
];

$alunos2022 = array_merge($alunos2021, $alunosNovos);
var_dump($alunos2022);

// array_merge adiciona os valores de um array com outro, aumentando o numero de chaves
// o operador de adicao (array1 + array2) junta os arrays mantendo os valores das chaves já existentes no primeiro array e adicionando os valores de chave adicionais do segundo array

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ... $alunosNovos];
// operador ... dentro de um array faz com que os elementos da variavel (array, no caso) sejam enviados individualmente
var_dump($alunos2022);

array_push($alunos2022, 'Alice', 'Bob', 'Ana Clara'); // util para adicionar varios elementos dentro de um array
$alunos2022[] = 'Luiz'; // adiciona um elemento por vez
echo array_unshift($alunos2022, 'Stephane', 'Rafaela') . PHP_EOL; //adiciona elementos no inicio do array e retorna a quantidade de elementos
echo array_shift($alunos2022) . PHP_EOL; // remove o primeiro elemento do array e retorna o elemento removido
echo array_pop($alunos2022) . PHP_EOL; // remove o ultimo elemento do array e retorna o elemento removido
var_dump($alunos2022);


$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

extract($dados); // pega o array e separa as variaveis
var_dump($nome, $nota, $idade);
var_dump(compact('nome', 'nota', 'idade')); // pega as variaveis separadas e compacta num array
