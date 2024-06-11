<?php
//Operadores de Comparação
//Igualdade ==
//Idêntico a ===
//Diferente de != 
//Não idêntico a !==
//Maior ou igual a >=
//Menor ou igual a <=

//Operador de Igualdade:
echo "Operador de Igualdade<br><br>";

if( 3 == 3)
{
    echo "Comparação verdadeira 1<br>"; //vdd
}

if( 3 == 4)
{
    echo "Comparação verdadeira 2<br>";
}

$a = 12;
$b = 12;
$c = 100;

if( $a == $b)
{
    echo "Comparação verdadeira 3<br>"; //vdd
}

if( $a == $c)
{
    echo "Comparação verdadeira 4<br>";
}

//utilizado no backend e projetos
$nome = "Luana";
$nomeDoSistema ="Luana";

if ($nome == $nomeDoSistema)
{
    echo "O nome coincide <br>";
}
////////////////////////////////////////////////////////////////////////////////////

//Operador idêntico a:
echo "<br>Operador Idêntico a<br><br>";

//não checa o tipo de dado
if (5 == "5")
{
    echo "5 é 5 1<br>";
}

//checa o tipo de dado e dá false
if (5 === "5")
{
    echo "5 é 5 2<br>";
}

//checa o tipo de dado e dá true
if (5 === 5)
{
    echo "5 é 5 3<br>";
}

////////////////////////////////////////////////////////////////////////////////////

//Operador diferente de:
echo "<br>Operador Diferente de: <br><br>";

$a = 3;
$b = 4;

if ($a != $b){
    echo "Testando diferença 1<br>";
}

if ($a != 3){
    echo "Testando diferença 2<br>";
}

if (false != "teste"){
    echo "Testando diferença 3<br>";
}

if (3 != "3"){
    echo "Testando diferença 4<br>";
}

if (3 != "4"){
    echo "Testando diferença 5<br>";
}

////////////////////////////////////////////////////////////////////////////////////

//Operador não idêntico:
echo "<br>Operador Não idêntico: <br><br>";

$a = 1;
$b = "1";

if ($a != $b){
    echo "TA é diferente de B 1<br>";
}

if ($a !== $b){
    echo "A é diferente de B 2<br>";
}

if (1 !== 2){
    echo "Não é idêntico 1 <br>";
}

if (1 !== "1"){
    echo "Não é idêntico 2 <br>";
}

if ([] !== "abc"){
    echo "Não é idêntico 3 <br>";
}

////////////////////////////////////////////////////////////////////////////////////

//Operador maior e maior ou igual a:
echo "<br>Operador Maior e Maior ou igual a: <br><br>";

$a = 4;
$b = 5;
$c = 6;
$d = 6;
$e = 7;

if ($a > $b){
    echo "Aé maior que B<br>";
}

//true
if ($b > $a){
    echo "B é maior que A <br>";
}

//true
if ($d >= $c){
    echo "D é maior ou igual a C<br>";
}

//true
if ($d >= $a){
    echo "D é maior ou igual a A<br>";
}

if ($d >= $e){
    echo "D é maior ou igual a E<br>";
}

////////////////////////////////////////////////////////////////////////////////////

//Operador menor e menor ou igual a:
echo "<br>Operador Menor e Menor ou igual a: <br><br>";


if (4 < 12){
    echo "4 é menor que 12<br>";
}

if (24 < 12){
    echo "24 é menor que 12<br>";
}

if (12 <= 12){
    echo "4 é menor ou igual a 12<br>";
}


////////////////////////////////////////////////////////////////////////////////////



