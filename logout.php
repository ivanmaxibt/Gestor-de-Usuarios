<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sesión cerrada</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    <h2>👋 ¡Sesión cerrada con éxito!</h2>
    <p class="lead">Gracias por usar el sistema.</p>
    <a href="index.php" class="btn btn-primary mt-3">🔐 Volver a iniciar sesión</a>
</div>
</body>
</html>