<?php
$num1 = intval(readline("Ingrese el primer número entero: "));
$num2 = intval(readline("Ingrese el segundo número entero: "));

// Realizando operaciones matemáticas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;

if ($num2 != 0) {
    $division = $num1 / $num2;
    $modulo = $num1 % $num2;
} else {
    $division = "No es posible dividir por cero";
    $modulo = "No es posible dividir por cero";
}

echo "Suma: $suma\n";
echo "Resta: $resta\n";
echo "Multiplicación: $multiplicacion\n";
echo "División: $division Resto(Módulo): $modulo\n ";
?>
