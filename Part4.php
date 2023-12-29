<?php

$numeros = [5, 4, 32, -8, 5];

$suma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $suma += $numeros[$i];
}

echo $suma . "\n";

$elemento_max = $numeros[0];

for($i = 0; $i < count($numeros); $i++){
    if($numeros[$i] > $elemento_max){
        $elemento_max = $numeros[$i];}
    }

echo $elemento_max  . "\n";

$elemento_min = $numeros[0];

for($i = 0; $i < count($numeros) ; $i++){
    if($numeros[$i] < $elemento_min){
        $elemento_min = $numeros[$i];}
}

echo $elemento_min . "\n";
?>