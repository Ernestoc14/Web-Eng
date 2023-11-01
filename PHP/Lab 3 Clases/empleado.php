
Cree una clase llamado Empleado que tenga como atributos nombre, cédula, edad, sueldo
bruto, segurosocial, impuestorenta, sueldo neto. Cada uno de estos atributos es privado cuyos
valores se devolverán usando getNombreAtributo( ); (ver ejemplo adjunto, esto es repaso en el
enfoque de usar métodos set/get se introdujeron en la POO). Esta clase tendrá los siguientes
métodos: 

Constructor parametrizado donde se asignarán el valor de todos los atributos a excepción de
sueldo neto
• CalcularSS (asuma que el seguro social es 12.50%)
• CalcularIR (se calcula así: Las personas naturales que ganen menos de $11,000 por año no
pagan impuesto sobre la renta. Aquellos que ganan entre $11,000 y $50,000 pagan una tasa
de impuesto del 15% mientras que aquellos que ganen $50,000 o más pagan una tasa del
25%.)
• setSueldoNeto (creo que a estas alturas usted ya sabe )

<?php

  $numero1 = floatval(readline("Ingrese un Numero:"));
  $numero2 = floatval(readline("Ingrese otro Numero:"));

  if ($numero1 > $numero2) {
    echo "El numero menor es: $numero2 y el mayor es: $numero1";
  } else {
    echo "El numero menor es: $numero1 y el mayor es: $numero2";
  }
?>