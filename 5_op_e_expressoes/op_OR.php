<?php

if (5 > 2 || 3 < 4){ //true ou true
    echo "op 1 é vdd<br>";
}

if (5 > 2 || 30 < 4){ //true ou false
    echo "op 2 é vdd<br>";
}

if (5 > 20 || 3 < 4){ //false ou true
    echo "op 3 é vdd<br>";
}

if (5 > 20 || 30 < 4){ //false ou false
    echo "op 4 é vdd<br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if ($a > $b || $d > $c){ //false ou true
    echo "op 5 é vdd<br>";
}

if (($a > $b || $d > $c) && $c < $d){ //true e true
    echo "op 6 é vdd<br>";
}

if (($a < $b || $d < $c) && $c < $d){ //true e true
    echo "op 7 é vdd<br>";
}