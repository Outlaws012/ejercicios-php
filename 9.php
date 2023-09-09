<?php

// Desarrolla un programa que determine si un número es primo o no.

$number = readline("Ingrese un número: ");

$esPrimo = true;

if ($number <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i < sqrt($number) ; $i++) { 
        if ($number % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}

if ($esPrimo) {
    echo $number . " Es un número primo \n";
} else {
    echo $number . " No es un número primo \n";
}