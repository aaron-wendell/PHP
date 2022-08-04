<?php
$idade = 18;
$numeroPessoas = 1;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';

echo $mensagem.PHP_EOL;
echo "Você só pode entrar, se tiver mais de 18 anos";
echo " ou a partir de 16 anos acompanhado\n";

echo PHP_EOL . PHP_EOL;


if ($idade >= 18){
    echo "Você tem $idade anos. Pode entrar";
}

else{
    echo "Você só tem \"$idade\" anos".PHP_EOL;
    if($idade >=16 && $numeroPessoas>1){
        echo "Mas pode entrar por estar acompanhado";
    }
    else if($idade>=16){
        echo "Para entrar voce precisa estar acompanhado";
    }
    else{
        echo "Vai ter que crescer mais para poder entrar";
    }
    echo PHP_EOL;
}