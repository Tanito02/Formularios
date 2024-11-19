<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadísticas</title>
</head>
<body>
    <h1>Calcular Media, Moda y Mediana</h1>
    <form action="" method="post">
        <label for="valores">Introduce 5 valores separados por coma:</label><br>
        <input type="text" name="valores" id="valores" required><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valores = array_map('intval', explode(',', $_POST['valores']));


            $media = array_sum($valores) / count($valores);

            $frequencies = array_count_values($valores);
            $moda = array_keys($frequencies, max($frequencies));

            sort($valores);
            $count = count($valores);
            $mediana = ($count % 2 == 0) ? ($valores[$count / 2 - 1] + $valores[$count / 2]) / 2 : $valores[floor($count / 2)];

            echo "<h2>Resultados:</h2>";
            echo "Media: $media<br>";
            echo "Moda: " . implode(", ", $moda) . "<br>";
            echo "Mediana: $mediana<br><br>";
            echo '<a href="index.php">Volver al inicio</a>';
        }
    ?>
</body>
</html>
