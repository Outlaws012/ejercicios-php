<?php

// Crea un programa que calcule el descuento a aplicar sobre el precio de un producto, dependiendo del tipo de cliente.

$price = (int) readline("Ingrese el precio del articulo: ");
$client = readline("Ingrese el tipo de cliente (Normal, Premium o VIP); ");

$discount = 0;

if ($client == "Normal") {
    $discount = 0;
} elseif ($client == "Premium") {
    $discount = 10;
} elseif ($client == "VIP") {
    $discount = 20;
}

$finalPrice = $price - ($price * $discount / 100);

echo "Precio del producto: $" . $price . "\n";
echo "Tipo de cliente: " . $client . "\n";
echo "Descuento aplicado al producto: %" . $discount. "\n";
echo "El nuevo precio es: $" . $finalPrice . "\n";