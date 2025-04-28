<?php
session_start();

// Menangani Form GET
if (isset($_GET['nama_get'])) {
    $nama_get = htmlspecialchars($_GET['nama_get']);
    echo "Nama dari GET: " . $nama_get . "<br>";
}

// Menangani Form POST
if (isset($_POST['nama_post'])) {
    $nama_post = htmlspecialchars($_POST['nama_post']);
    echo "Nama dari POST: " . $nama_post . "<br>";
}

// Simpan user ke session
if (isset($nama_post)) {
    $_SESSION['user'] = $nama_post;
}

// Tampilkan session user kalau ada
if (isset($_SESSION['user'])) {
    echo "User dari session: " . $_SESSION['user'] . "<br>";
}

// Set cookie username
setcookie("username", "Taufiq", time() + 3600); // Berlaku 1 jam

// Tampilkan cookie username kalau ada
if (isset($_COOKIE['username'])) {
    echo "Username dari cookie: " . $_COOKIE['username'] . "<br>";
}
?>