<?php
$num1 = floatval(readline("Ingrese el primer número: "));
$num2 = floatval(readline("Ingrese el segundo número: "));
$num3 = floatval(readline("Ingrese el tercer número: "));
$num4 = floatval(readline("Ingrese el cuarto número: "));

$mayor = max($num1, $num2, $num3, $num4);

$menor = min($num1, $num2, $num3, $num4);

echo "El mayor número es: $mayor\n";
echo "El menor número es: $menor\n";
?>
