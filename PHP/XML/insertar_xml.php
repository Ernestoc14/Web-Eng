<?php

$archivo_xml = 'datos.xml';

// Verificar si el archivo XML existe 
if (file_exists($archivo_xml)) {
  // Cargar el contenido del archivo XML
  $xml = simplexml_load_file($archivo_xml);

    // Verificar si la carga fue exitosa 
  if ($xml) {
    $nuevoUsuario = $xml->addChild('usuario');
    $nuevoUsuario->addChild('id', 3);
    
    $nuevoUsuario->addChild('nombre', 'Ana');
    $nuevoUsuario->addChild('edad', 22);
    
    $xml->asXML($archivo_xml);
    
    echo "Nuevo usuario agregado exitosamente.";
  } else {
    echo "Error al cargar el archivo XML.";
  }
} else {
  echo "El archivo XML no existe.";
}

?>
