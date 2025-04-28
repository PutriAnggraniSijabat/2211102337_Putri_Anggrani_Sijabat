<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>

<h2>Form dengan GET</h2>
<form method="GET" action="proses.php">
    Nama (GET): <input type="text" name="nama_get">
    <input type="submit" value="Kirim GET">
</form>

<h2>Form dengan POST</h2>
<form method="POST" action="proses.php">
    Nama (POST): <input type="text" name="nama_post">
    <input type="submit" value="Kirim POST">
</form>

</body>
</html>