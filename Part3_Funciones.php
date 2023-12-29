<?php
function multiplicar($numero1, $numero2) {
    $resultado = $numero1 * $numero2;
    return $resultado;
}

$numeroA = 5;
$numeroB = 7;

$resultadoMultiplicacion = multiplicar($numeroA, $numeroB);

echo "El resultado de la multiplicación de $numeroA y $numeroB es: $resultadoMultiplicacion";
?>
