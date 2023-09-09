<?php

$mark = readline("Ingrese su calificación: ");

$letter = "";

if ($mark >= 90) {
    $letter = "A";
} elseif ($mark >= 80) {
    $letter = "B";
} elseif ($mark >= 70) {
    $letter = "C";
} elseif ($mark >= 60) {
    $letter = "D";
} else {
    $letter = "F";
}

echo "Clasificación: " . $mark . "\n";
echo "Letra: " . $letter . "\n";