<?php

$a = 1;
$b = 2;
$c = 10;
$d = 5;

$opSoma = $a + $a;
echo "Soma de " . $a . " + " . $a . " = " . $opSoma . "<br>";

$opMulti = $b * $b;
echo "Multiplicação de " . $b . " * " . $b . " = " . $opMulti . "<br>";

$opDivi = $c / $b;
echo "Divisão de " . $c . " / " . $b . " = " . $opDivi . "<br>";

$opSub = $d - $b;
echo "Subtração de " . $d . " - " . $b . " = " . $opSub . "<br>";

$expressao = $opDivi * $opSub;
echo "Expressão de " . $opDivi . " * " . $opSub . " = " . $expressao;