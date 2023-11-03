<!-- 
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
• setSueldoNeto (creo que a estas alturas usted ya sabe ) -->

<?php
class Empleado {
  private $nombre;
  private $cedula;
  private $edad;
  private $sueldoBruto;
  private $seguroSocial;
  private $impuestoRenta;
  private $sueldoNeto;

  public function __construct($nombre, $cedula, $edad, $sueldoBruto) {
      $this->nombre = $nombre;
      $this->cedula = $cedula;
      $this->edad = $edad;
      $this->sueldoBruto = $sueldoBruto;
  }

  public function getNombreAtributo($atributo) {
      return $this->$atributo;
  }

  public function calcularSS() {
      $this->seguroSocial = $this->sueldoBruto * 0.125; // 12.50% de seguro social
  }

  public function calcularIR() {
      if ($this->sueldoBruto < 11000) {
          $this->impuestoRenta = 0; // No paga impuesto sobre la renta
      } elseif ($this->sueldoBruto >= 11000 && $this->sueldoBruto <= 50000) {
          $this->impuestoRenta = $this->sueldoBruto * 0.15; // Tasa del 15%
      } else {
          $this->impuestoRenta = $this->sueldoBruto * 0.25; // Tasa del 25%
      }
  }

  public function setSueldoNeto() {
      $this->sueldoNeto = $this->sueldoBruto - $this->seguroSocial - $this->impuestoRenta;
  }
}

// Ejemplo Personal
$empleado = new Empleado("Ernesto Crespo", "8-929-1657", 25, 60000);
$empleado->calcularSS();
$empleado->calcularIR();
$empleado->setSueldoNeto();

echo "Nombre: " . $empleado->getNombreAtributo("nombre") . "\n";
echo "Cédula: " . $empleado->getNombreAtributo("cedula") . "\n";
echo "Edad: " . $empleado->getNombreAtributo("edad") . "\n";
echo "Sueldo Bruto: $" . $empleado->getNombreAtributo("sueldoBruto") . "\n";
echo "Seguro Social: $" . $empleado->getNombreAtributo("seguroSocial") . "\n";
echo "Impuesto sobre la Renta: $" . $empleado->getNombreAtributo("impuestoRenta") . "\n";
echo "Sueldo Neto: $" . $empleado->getNombreAtributo("sueldoNeto") . "\n";

?>