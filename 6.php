<?php 

// Escribe un programa que determine si una cadena de texto es palíndromo
// (se lee igual de izquierda a derecha y de derecha a izquierda).

$word =  readline("Escribe un palíndromo: ");

function esPalindromo($word){
    $word =  strtolower(str_replace(' ', '', $word));
    $reverse = strrev($word);

    if ($word == $reverse) {
        echo "Es un palindromo \n";
    } else{
        echo "No es un palindromo \n";
    }
}

esPalindromo($word);