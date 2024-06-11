<?php

//Criando um array associativo
$moto = [
    'modelo' => "CG 160 Fan", 
    'marca' => 'Honda', 
    'ano' => 2024];

//Apresentando elementos do array utilizando suas chaves como referência
print_r($moto);

echo("<br>");

echo($moto['modelo']);

echo("<br>");

echo($moto['marca']);

//Transformando elementos do array em variáveis
$marca = $moto['marca'];
$modelo = $moto['modelo'];
$ano = $moto['ano'];

echo("<br>");

//Aplicando variáveis numa string
echo "A moto desejada é da marca $marca e do modelo $modelo do ano de $ano";