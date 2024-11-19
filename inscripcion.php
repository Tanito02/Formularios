<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inscripción</title>
</head>
<body>
    <h1>Formulario de Inscripción</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="fotografia">Fotografía:</label>
        <input type="file" name="fotografia" id="fotografia"><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" id="descripcion" rows="5" maxlength="255" required></textarea><br><br>

        <label>Opción:</label><br>
        <select name="opcion" required>
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
        </select><br><br>

        <label>¿Acepta los términos?</label><br>
        <input type="radio" name="terminos" value="si" required> Sí
        <input type="radio" name="terminos" value="no"> No<br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $email = $_POST['email'];
            $descripcion = $_POST['descripcion'];
            $opcion = $_POST['opcion'];
            $terminos = $_POST['terminos'];

            if (empty($nombre) || empty($direccion) || empty($email) || empty($descripcion) || empty($opcion) || empty($terminos)) {
                echo "<p>Error: Todos los campos son obligatorios.</p>";
            } else {
                echo "<h2>Datos Enviados:</h2>";
                echo "Nombre: $nombre<br>";
                echo "Dirección: $direccion<br>";
                echo "Correo: $email<br>";
                echo "Descripción: $descripcion<br>";
                echo "Opción elegida: $opcion<br>";
                echo "Acepta los términos: $terminos<br>";
                echo '<a href="index.php">Volver al inicio</a>';
            }
        }
    ?>
</body>
</html>
