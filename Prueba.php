<?php
// Este es un comentario en PHP
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP Básica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a mi página PHP</h1>
        <h1>Bienvenido a mi página PHP</h1>
        <h1>Bienvenido a mi página PHP</h1>
        <h1>Bienvenido a mi página PHP</h1>
        <p>Este es un ejemplo de un archivo PHP con HTML y CSS embebidos.</p>
        <?php
        echo "<p>Esta línea es generada por PHP.</p>";
        ?>
    </div>
</body>
</html>
