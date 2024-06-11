<?php

$arr = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'Marrom'];

echo("Acessando o array: <br>");

print_r($arr);

echo("<br><br>Acessando a chave 'nome' do array: <br>");

echo $arr['nome'];

echo("<br><br>Acessando a chave 'patas' do array: <br>");

echo $arr['patas'];

$arrAssoc = ['chave' => 'valor', 'bool' => true];

echo("<br><br>Acessando o array: <br>");

print_r($arrAssoc);