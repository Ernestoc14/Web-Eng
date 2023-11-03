Vuelva a resolver el siguiente problema pero usando una clase llama Cilindro : Desarrolle un
programa que permita determinar el área y volumen de un cilindro dado su radio (R) y altura (H).


<?php
class Cilindro {
  private $radio;
  private $altura;

  public function __construct($radio, $altura) {
      $this->radio = $radio;
      $this->altura = $altura;
  }

  public function calcularArea() {
      $areaBase = 3.14159265359 * pow($this->radio, 2); // Área de la base (π * r^2)
      $areaLateral = 2 * 3.14159265359 * $this->radio * $this->altura; // Área lateral (2π * r * h)
      $areaTotal = 2 * $areaBase + $areaLateral; // Área total (2 * Área base + Área lateral)
      return $areaTotal;
  }

  public function calcularVolumen() {
      $volumen = 3.14159265359 * pow($this->radio, 2) * $this->altura; // Volumen (Área base * h)
      return $volumen;
  }
}

// Ejemplo 
$radio = readline("Ingrese el radio del cilindro: ");
$altura = readline("Ingrese la altura del cilindro: ");
$cilindro = new Cilindro($radio, $altura); // Radio = 5, Altura = 10
$area = $cilindro->calcularArea();
$volumen = $cilindro->calcularVolumen();

echo "Área del cilindro: " . $area . " unidades cuadradas\n";
echo "Volumen del cilindro: " . $volumen . " unidades cúbicas\n";

?>
