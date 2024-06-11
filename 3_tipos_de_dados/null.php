<?php

echo NULL;

$nome = NULL;

if (is_null($nome)){
    echo ("O valor é nulo!");
}
else{
    echo("Não é nulo!");
}

echo("<br><br>");

$nome = "Luana";

if (is_null($nome)){
    echo ("O valor é nulo");
}
else{
    echo("Não é nulo!");
}