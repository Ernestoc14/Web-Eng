<?php

$archivo_xml = 'datos.xml';

if (file_exists($archivo_xml)) {
  $xml = simplexml_load_file($archivo_xml); 
  if ($xml) {
    foreach ($xml->usuario as $usuario) {
      $id = $usuario->id;
      $nombre = $usuario->nombre;
      $edad = $usuario->edad;
      
      echo "ID: $id<br>";
      echo "Nombre: $nombre<br>"; 
      echo "Edad: $edad<br>"; 
      echo "<br>";
    }
  } else {
    echo "Error al cargar el archivo XML.";
  }
} else {
  echo "El archivo XML no existe.";
}

?>
