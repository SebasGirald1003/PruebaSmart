<?php

function obtenerPrimos($cantidad) {
    $numerosPrimos = array();
    $numero = 2;

    while (count($numerosPrimos) < $cantidad) {
        if (esPrimo($numero)) {
            $numerosPrimos[] = $numero;
        }
        $numero++;
    }

    return $numerosPrimos;
}

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

$primerosPrimos = obtenerPrimos(10);

echo "Los primeros 10 números primos son: " . implode(", ", $primerosPrimos);

?>

