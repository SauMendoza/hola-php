<?php
$mensaje = "¡Hola Mundo!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1><?= htmlspecialchars($mensaje) ?></h1>
        <p>Corriendo en PHP <?= PHP_VERSION ?> sobre Azure App Service</p>
    </main>
</body>
</html>