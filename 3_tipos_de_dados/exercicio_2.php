<?php

//criando um array associativo de pessoa
$pessoa1 = [
    'nome' => 'Mari', 
    'idade' => 49, 
    'sexo' => 'Feminino'
];

//checando a maior idade da pessoa
if ($pessoa1['idade'] >= 18)
{
    echo("Maior de idade. Acesso autorizado.");
}
else
{
    echo("Menor de idade. Acesso negado.");
}