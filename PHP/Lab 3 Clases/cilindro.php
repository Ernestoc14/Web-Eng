Vuelva a resolver el siguiente problema pero usando una clase llama Cilindro : Desarrolle un
programa que permita determinar el área y volumen de un cilindro dado su radio (R) y altura (H).


<?php
$radio = floatval(readline("Ingrese el radio del cilindro (R): "));
$altura = floatval(readline("Ingrese la altura del cilindro (H): "));

// Calcula el área del cilindro
$area_base = M_PI * pow($radio, 2); // Área de la base
$area_lateral = 2 * M_PI * $radio * $altura; // Área lateral
$area_total = 2 * $area_base + $area_lateral; // Área total

// Calcula el volumen del cilindro
$volumen = $area_base * $altura;

echo "El área del cilindro es: $area_total\n";
echo "El volumen del cilindro es: $volumen\n";
?>
