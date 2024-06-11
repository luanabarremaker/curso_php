<?php

//-, /, *
//encapsular em variáveis

$a = 25;
$b = 10;
$c = 15;
$d = 10;

$operacao = $a - $b / $c * $d;

echo $operacao;

echo "<br><br>Ou<br><br>";

$operacao = ($a - $b) / $c * $d;

echo $operacao;