<?php

//mudança do tipo implícita, automática, dos tipos de dado

echo 5 / 2;
echo"<br>";

if(is_float(5/2)){
    echo "É float <br>";
}

echo 2 . 3;
echo"<br>";

if(is_string(2 . 3)){
    echo "É string <br>";
}

$nome = "Luana";
$sobrenome = "Lima";
$idade = 19;

//operação de concatenação
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br>";

//teste pessoal
$frase = $nomeCompleto . " tem " . $idade . " anos.";

echo $frase;