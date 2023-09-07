<?php 

// Crea un programa que determine si un número es par o impar.

$num = (int) readline("Ingrese el número: ");

function par_impar($num) {
    if ($num % 2 == 0) {
        echo "El $num es par";
    } else {
        echo "El $num es impar";
    }
}

par_impar($num);

echo "\n";