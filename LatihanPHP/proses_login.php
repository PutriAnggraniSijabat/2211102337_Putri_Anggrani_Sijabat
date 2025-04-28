<?php
session_start();

// Data user yang benar
$user = "febrilia";
$pass = "123";

// Ambil data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Cek login
if ($username === $user && $password === $pass) {
    $_SESSION['username'] = $user;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Login Gagal! Username atau Password salah.";
    echo "<br><a href='login.php'>Kembali ke Login</a>";
}
?>