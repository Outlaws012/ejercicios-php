<?php

// Crea un programa que calcule el descuento a aplicar 
// sobre el precio de un producto, dependiendo del tipo de cliente.

$client = readline("Que tipo de cliente eres? Normal, Premium o VIP: ");

function discount($normal, $premium, $vip) {
    $normal = "Normal";
    $premium = "Premium";
    $vip = "VIP";

    if ($normal === "Normal") {
        echo "$10%";
    } elseif ($premium === "Premium") {
        echo "$25%";
    } elseif ($vip === "VIP") {
        echo"$35%";
    } else {
        echo"No se reconoce este cliente.";
    }
}

?Crea un programa que calcule el descuento a aplicar sobre el precio de un producto, dependiendo del tipo de cliente.