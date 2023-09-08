<?php

// Haz un programa que determine si una persona es mayor de edad o no, en base a su fecha de nacimiento.

$edad = readline("Ingrese su fecha de nacimiento: ");

function mayorEdad ($fechaNacimiento) {
    $today = new DateTime();
    $birth = new DateTime($fechaNacimiento);
    $age =  $today -> diff($birth) -> y;

    if ($age >= 18) {
        echo "Es mayor de edad";
    } else {
        echo "Eres menor de edad";
    }
}

mayorEdad($edad);