<?php

//segue a ordem da matemática
echo 3 + 2 * 5;

echo "<br>";

//também pode usar parênteses
echo (3 + 2) * 5;

echo "<br>";

//transição de inteiro para float naturalmente
echo 5 + 2 / 10;

echo "<br>";

//também podemos utilizar variáveis nas expressões naturalmente
$a = 5;
$b = 2;
$c = 10;

echo $a + $b / $c;
echo "<br>";
echo $c + $b / $a;
echo "<br>";

//podemos encapsular uma expressão com variáveis e seus valores em outra var

$d = $a * $b * $c;

echo $d;
