<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Puertas Lógicas AND, OR, XOR</title>
</head>
<body>
    <h1>Puertas Lógicas AND, OR, XOR</h1>
    <form method="POST" action="">
        <label for="input1">Entrada 1 (0 o 1):</label>
        <input type="number" id="input1" name="input1" min="0" max="1" required><br>
        <label for="input2">Entrada 2 (0 o 1):</label>
        <input type="number" id="input2" name="input2" min="0" max="1" required><br>
        <button type="submit" name="operation" value="AND">AND</button>
        <button type="submit" name="operation" value="OR">OR</button>
        <button type="submit" name="operation" value="XOR">XOR</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input1 = (int)$_POST['input1'];
        $input2 = (int)$_POST['input2'];
        $operation = $_POST['operation'];
        $result = null;
        switch ($operation) {
            case 'AND':
                $result = $input1 & $input2;
                break;
            case 'OR':
                $result = $input1 | $input2;
                break;
            case 'XOR':
                $result = $input1 ^ $input2;
                break;
        }
        echo "<p>Resultado: " . htmlspecialchars("$result") . "</p>";
    }
    ?>
    <a href="index.php">Volver a la página principal</a>
</body>
</html>

