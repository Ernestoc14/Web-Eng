<?php
$datos = array(
  "nombre" => "Juan",
  "edad" => 25,
  "curso" => "Licenciatura de Artes",
  "notas" => array(
  "arte" => 90,
  "historia" => 85,
  "ciencias" => 92
  )
);
echo "Datos en PHP:\n";
print_r($datos);
?>

<?php
$json_datos = json_encode($datos, JSON_PRETTY_PRINT);
if ($json_datos === false) {
  die("Error al codificar los datos a JSON.");
}
echo "\nDatos en Formato JSON:\n";
echo $json_datos;
?>

<?php
$nombre_archivo = 'datos_generados.json';
file_put_contents($nombre_archivo, $json_datos);
if (file_exists($nombre_archivo)) {
  echo "\nArchivo JSON creado exitosamente: $nombre_archivo\n";
} else {
  echo "\nError al crear el archivo JSON.\n";
}
?>