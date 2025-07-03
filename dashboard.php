<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require 'config/db.php';

// Verificar sesión
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

// Obtener usuarios de la base de datos
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();

// Título personalizado para el header
$title = "Panel de Control"; 
include 'includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestor de Usuarios</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-4">

    <h2 class="mb-3">Bienvenido, <?= $_SESSION['user'] ?> (<?= $_SESSION['role'] ?>)</h2>
    <div class="mb-3">
        <a href="create.php" class="btn btn-success">+ Crear nuevo usuario</a>
        <a href="logout.php" class="btn btn-outline-danger float-end">Cerrar sesión</a>
    </div>

    <table class="table table-bordered bg-white">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['username'] ?></td>
                <td><?= $u['name'] ?></td>
                <td><?= $u['role'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $u['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
                    <a href="delete.php?id=<?= $u['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que querés eliminar este usuario?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
</body>
</html>
<?php include 'includes/footer.php'; ?>