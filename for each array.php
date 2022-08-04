<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

echo PHP_EOL;

$veiculos = [
    'LMC-2245' => [
        'marca' => 'VolksWagen',
        'modelo' => 'Golf',
        'ano' => 2015,
        'dono' => 'Gisele'
    ],
    'CPO-0485' => [
        'marca' => 'Fiat',
        'modelo' => 'Palio',
        'ano' => 2018,
        'dono' => 'Marcio'
    ]
];

foreach ($veiculos as $placa => $info){
    echo $placa . " " . $info['marca'] . " " . $info['modelo'] . " " . $info['ano'] . " " . $info['dono'] . PHP_EOL;
}