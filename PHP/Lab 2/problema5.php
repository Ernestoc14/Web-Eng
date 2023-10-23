<?php
$A = floatval(readline("Ingrese el valor A: "));
$B = floatval(readline("Ingrese el valor B: "));
$C = floatval(readline("Ingrese el valor C: "));

// Verifica si los valores son distintos
if ($A != $B && $A != $C && $B != $C) {
    $maximo = max($A, $B, $C);

    $minimo = min($A, $B, $C);

    echo "El mayor valor es $maximo y el menor valor es $minimo.\n";
} else {
    echo "Por favor, asegúrese de introducir valores distintos.\n";
}
?>
