<?php

$string = "5";
$inteiro = 12;

$operação = $string * $inteiro;

echo $operação . "<br>";

echo gettype($operação);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype("teste");
echo "<br>";
echo "<br>";

echo "integer = inteiro";
echo "<br>";
echo "double = float";