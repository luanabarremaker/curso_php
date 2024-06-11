<?php

//Operador de concatenação une dois valores, cria novas variáveis e
//cria expressões mais complexas
echo "Testando" . " a " . "concatenação <br><br>";

//criando um array com informações de funcionário
$funcio1 = [
    'nome' => "Luana",
    'sobrenome' => "Lima",
    'empresa' => "Contato Seguro",
    'aniver' => "10/04/2005"
];

//criando variável que concatena nome e sobrenome
$nomeCompleto = $funcio1['nome'] . " " . $funcio1['sobrenome'];

//função feliz aniversário 
function felizAniver()
{
    //declarando as variáveis globais dentro do escopo local da função
    global $funcio1;
    global $nomeCompleto;

    //usando a concatenação e as chaves do array para criar um texto
    echo "Data: " . $funcio1['aniver'] . "<br><br>";
    echo "Feliz aniversário, " . $nomeCompleto . "! Nós da " . $funcio1['empresa'] . " te desejamos tudo de bom nesse dia!";
}

//chamando a função
felizAniver();