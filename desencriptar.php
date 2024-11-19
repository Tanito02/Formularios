<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desencriptar Mensaje</title>
</head>
<body>
    <h1>Desencriptar un Mensaje</h1>
    <form action="" method="post">
        <label for="mensaje_encriptado">Mensaje encriptado:</label><br>
        <textarea name="mensaje_encriptado" id="mensaje_encriptado" required></textarea><br><br>
        <button type="submit">Desencriptar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mensaje_encriptado = $_POST['mensaje_encriptado'];
            $mensaje_original = base64_decode($mensaje_encriptado);
            echo "<h2>Mensaje Desencriptado:</h2>";
            echo "<p>$mensaje_original</p><br>";
            echo '<a href="index.php">Volver al inicio</a>';
        }
    ?>
</body>
</html>
