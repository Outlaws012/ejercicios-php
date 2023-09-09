<?php

$words = array("charles", "carlos", "lewis", "max", "checo", "senna");

$form = "<form action='analisis.php'>";

for ($i=0; $i < count($words); $i++) { 
    $form .= "la palabra: " . str_shuffle($words[$i]) . " " . 
    "<input type='text' name= 'palabra'".$i.">".
    "<br>";
}

$btn = "<button type='submit'>Enviar</button>";
$formClose = "</form>";


echo $form.$btn.$formClose;