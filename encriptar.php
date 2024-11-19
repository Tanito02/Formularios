<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encriptar Mensaje</title>
</head>
<body>
    <h1>Encriptar un Mensaje</h1>
    <form action="" method="post">
        <label for="mensaje">Mensaje a encriptar:</label><br>
        <textarea name="mensaje" id="mensaje" required></textarea><br><br>
        <button type="submit">Encriptar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mensaje = $_POST['mensaje'];
            $mensaje_encriptado = base64_encode($mensaje);
            echo "<h2>Mensaje Encriptado:</h2>";
            echo "<p>$mensaje_encriptado</p><br>";
            echo '<a href="index.php">Volver al inicio</a>';
        }
    ?>
</body>
</html>
