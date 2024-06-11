<?php

$a = 12;
$b = 2;
$c = 5;

echo "Operador de módulo representa o resto de uma divisão <br> <br>";

echo "Módulo exato de " . $a . " dividido por " . $b . "<br>";
$moduloExato = $a % $b;
echo $moduloExato . "<br>";

echo "Módulo inexato de " . $c . " dividido por " . $b . "<br>";
$moduloInexato = $c % $b;
echo $moduloInexato . "<br>";