<?php

//para criar um objeto, precisamos de um molde, que é a classe
class Pessoa {
    
    //dentro da classe vão os métodos, que são as ações do objeto
    function falar() {
        echo("Olá pessoal!");
    }
}

//para criarmos um novo objeto utilizamos o molde criado
$luana = new Pessoa();

//para incluir propriedades, que são características do objeto, fazemos assim
$luana->nome = "Luana";

echo $luana->nome;

echo "<br>";

echo $luana->falar();