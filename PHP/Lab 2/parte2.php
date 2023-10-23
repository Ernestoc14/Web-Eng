<?php
while (true) {
    // Menú principal
    echo "Menú Principal:\n";
    echo "1. Sumatoria de números del 1 al 10\n";
    echo "2. Contar números impares del 1 al 300\n";
    echo "3. Calcular Promedio de 5 Notas\n";
    echo "4. Calcular la media de 10 calificaciones\n";
    echo "5. Ordenar vector de 5 elementos\n";
    echo "0. Salir\n";

    // Lee la opción del usuario
    $opcion = intval(readline("Seleccione una opción: "));

    if ($opcion === 0) {
        break; // Salir del programa
    } elseif ($opcion === 1) {
        // Problema 1: Sumatoria de números del 1 al 10
        $sumatoria = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sumatoria += $i;
        }
        echo "La sumatoria de los números del 1 al 10 es: $sumatoria\n";
    } elseif ($opcion === 2) {
        // Problema 2: Contar números impares del 1 al 300
        $contador_impares = 0;
        $sumatoria_impares = 0;
        for ($i = 1; $i <= 300; $i++) {
            if ($i % 2 !== 0) {
                $contador_impares++;
                $sumatoria_impares += $i;
            }
        }
        echo "Total de números impares: $contador_impares\n";
        echo "Sumatoria de números impares: $sumatoria_impares\n";
    } elseif ($opcion === 3) {
        // Problema 3: Calcular Promedio de 5 Notas
        $notas = [];
        for ($i = 1; $i <= 5; $i++) {
            $nota = floatval(readline("Ingrese la nota $i: "));
            $notas[] = $nota;
        }
        $promedio = array_sum($notas) / count($notas);
        echo "El promedio de las notas es: $promedio\n";
    } elseif ($opcion === 4) {
        // Problema 4: Calcular la media de 10 calificaciones
        $calificaciones = [];
        for ($i = 1; $i <= 10; $i++) {
            $calificacion = floatval(readline("Ingrese la calificación $i: "));
            $calificaciones[] = $calificacion;
        }
        $media = array_sum($calificaciones) / count($calificaciones);
        echo "La media de las calificaciones es: $media\n";
    } elseif ($opcion === 5) {
        // Problema 5: Ordenar un vector de 5 elementos
        $vector = [];
        for ($i = 1; $i <= 5; $i++) {
            $elemento = intval(readline("Ingrese el elemento $i: "));
            $vector[] = $elemento;
        }

        $orden = readline("Ordenar (a para ascendente, d para descendente, o para original): ");

        if ($orden === "a") {
            sort($vector);
            echo "Vector ordenado ascendente: " . implode(", ", $vector) . "\n";
        } elseif ($orden === "d") {
            rsort($vector);
            echo "Vector ordenado descendente: " . implode(", ", $vector) . "\n";
        } elseif ($orden === "o") {
            echo "Vector original: " . implode(", ", $vector) . "\n";
        } else {
            echo "Opción no válida.\n";
        }
    } else {
        echo "Opción no válida. Por favor, seleccione una opción válida.\n";
    }
}
?>
