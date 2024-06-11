<?php

//dessa forma, a variável local reseta seus valores ao final da execução da função
function teste()
{
    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();

//dessa forma, a variável static acumula seus valores a cada chamada de função
function testeStatic()
{
    static $a = 0;
    $a++;

    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();