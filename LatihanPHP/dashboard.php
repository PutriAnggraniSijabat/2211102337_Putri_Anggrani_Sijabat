<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>

<a href="logout.php">Logout</a>

</body>
</html>