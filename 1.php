<?php

// Escribe un programa que verifique si un número es positivo, negativo o cero.

$num = (int) readline("Escribe un numero: ");

function pos_neg($num){
    if ($num > 0) {
        echo "El $num es positivo";
    } elseif ($num < 0) {
        echo "El $num es negativo";
    } else {
        echo "El $num es cero";
    }
}

pos_neg($num);

echo "\n";
