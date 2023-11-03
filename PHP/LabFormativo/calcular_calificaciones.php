<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Calificaciones en Física</title>
</head>
<body>
    <h1>Resultado de Calificaciones en Física</h1>

    <?php
    // Recuperar datos del formulario
    $alumno1 = $_POST['alumno1'];
    $cedula1 = $_POST['cedula1'];
    $practica1 = $_POST['practica1'];
    $problemas1 = $_POST['problemas1'];
    $teoria1 = $_POST['teoria1'];

    $alumno2 = $_POST['alumno2'];
    $cedula2 = $_POST['cedula2'];
    $practica2 = $_POST['practica2'];
    $problemas2 = $_POST['problemas2'];
    $teoria2 = $_POST['teoria2'];

    // Verificar que las notas estén dentro del rango
    $notas_validas = true;
    if ($practica1 < 1 || $practica1 > 5 || $problemas1 < 1 || $problemas1 > 5 || $teoria1 < 1 || $teoria1 > 5) {
        $notas_validas = false;
    }
    if ($practica2 < 1 || $practica2 > 5 || $problemas2 < 1 || $problemas2 > 5 || $teoria2 < 1 || $teoria2 > 5) {
        $notas_validas = false;
    }

    if (!$notas_validas) {
        echo "Error: Las notas deben estar en el rango de 1.0 a 5.0";
    } else {
        // Calcular calificaciones
        $nota_final1 = ($practica1 * 0.10) + ($problemas1 * 0.50) + ($teoria1 * 0.40);
        $nota_final2 = ($practica2 * 0.10) + ($problemas2 * 0.50) + ($teoria2 * 0.40);

        // Mostrar resultados
        echo "<p>Resultados:</p>";
        echo "<p>$alumno1 ($cedula1): Nota Final = $nota_final1</p>";
        echo "<p>$alumno2 ($cedula2): Nota Final = $nota_final2</p>";
    }
    ?>
</body>
</html>
