
Desarrolle un programa que permita leer dos números 
y ordenarlos de menor a mayor, si es el caso.

<?php

  $numero1 = floatval(readline("Ingrese un Numero:"));
  $numero2 = floatval(readline("Ingrese otro Numero:"));

  if ($numero1 > $numero2) {
    echo "El numero menor es: $numero2 y el mayor es: $numero1";
  } else {
    echo "El numero menor es: $numero1 y el mayor es: $numero2";
  }
?>