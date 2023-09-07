<?php

// Crea un programa que calcule el índice de masa corporal (IMC) 
// de una persona y muestre si está en un rango saludable.


// Función para calcular el IMC
function calcularIMC($peso, $altura) {
    // Asegúrate de que la altura esté en metros
    $altura = $altura / 100; // Convierte la altura de cm a metros
    // Calcula el IMC
    $imc = $peso / ($altura * $altura);
    return $imc;
}

// Función para determinar el rango de IMC
function determinarRangoIMC($imc) {
    if ($imc < 18.5) {
        return "Bajo peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Peso saludable";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30) {
        return "Obesidad";
    } else {
        return "Valores fuera de rango";
    }
}

// Ingresa el peso en kilogramos y la altura en centímetros
$peso = (int) readline("Ingresa tu peso: "); // Cambia este valor al peso en kg
$altura = readline("Ingresa tu altura: "); // Cambia este valor a la altura en cm

// Llama a la función para calcular el IMC
$imc = calcularIMC($peso, $altura);

// Determina el rango de IMC
$rangoIMC = determinarRangoIMC($imc);

// Mostrar el resultado
echo "Tu IMC es: " . number_format($imc, 2) . "\n";
echo "Estatus de IMC: " . $rangoIMC;
?>


