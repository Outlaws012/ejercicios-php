<?php

// Haz un programa que compare dos números y muestre el mayor de ellos.

$a = (int) readline("Ingrese el primer número: ");
$b = (int) readline("Ingrese el segundo número: ");

function mayor_menor($a, $b) {
    if ($a > $b) {
        echo "$a es mayor que $b";
    } elseif ($b > $a) {
        echo "$b es mayor que $a";
    } else {
        echo "Los dos iguales.";
    }
}

mayor_menor($a, $b);

echo "\n";