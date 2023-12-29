<?php
$num1 = floatval(readline("Ingrese el primer numero: "));
$num2 = floatval(readline("Ingrese el segundo numero: "));

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$producto = $num1 * $num2;

if($num2 == 0){
    echo "No se puede dividir por 0\n";
    $division = null;
}else{
    $division = $num1 / $num2;
}

echo "suma: " . $suma . "\n";
echo "resta: " . $resta . "\n";
echo "producto: " . $producto . "\n";
echo "division: " . $division . "\n";

?>