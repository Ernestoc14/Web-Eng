<?php
$millas_marinas = floatval(readline("Ingrese la distancia en millas marinas: "));

$metros = $millas_marinas * 1852;

echo "La distancia de $millas_marinas millas marinas equivale a $metros metros.\n";
?>
