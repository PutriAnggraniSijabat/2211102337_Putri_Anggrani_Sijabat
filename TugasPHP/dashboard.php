<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit();
}
$user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Selamat Datang, <?= htmlspecialchars($user) ?>!</h4>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Umur</label>
                    <input type="number" name="umur" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="logout.php" class="btn btn-secondary float-end">Logout</a>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <hr>
                <?php
                    $nama = htmlspecialchars($_POST["nama"]);
                    $umur = intval($_POST["umur"]);
                    $status = ($umur >= 18) ? "Dewasa" : "Belum Dewasa";
                    $alert = ($umur >= 18) ? "success" : "warning";
                ?>
                <div class="alert alert-<?= $alert ?> mt-3">
                    <strong>Halo, <?= $nama ?>!</strong> Status kamu: <strong><?= $status ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>