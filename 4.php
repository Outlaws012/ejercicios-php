<?php

// Desarrolla un programa que determine si un año es bisiesto o no.

function bisiesto ($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

$year = (int) readline("Ingrese el año: "); 

if (bisiesto($year)) {
    echo "$year Es Bisiesto";
} else {
    echo "$year no es Bisiesto";
}

echo "\n";