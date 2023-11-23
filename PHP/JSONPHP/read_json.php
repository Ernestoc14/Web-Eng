<?php
  $json_content = file_get_contents('data.json');
  $data = json_decode($json_content, true);
  if ($data === null) {
    die("Error al decodificar el archivo JSON.");
  }
  echo "Datos Leídos desde el Archivo JSON:\n";
  print_r($data);
  echo "\nAccediendo a Información Específica:\n";
  foreach ($data['alumnos'] as $alumno) {
    echo "Nombre: " . $alumno['nombre'] . ", Edad: " . $alumno['edad'] . ", Curso: " . $alumno['curso']
  . "\n";
  }

  echo "Imprimiendo el segundo objeto del arreglo: "
  . $data['alumnos'][1]['nombre'] . "\n";
  ?>
