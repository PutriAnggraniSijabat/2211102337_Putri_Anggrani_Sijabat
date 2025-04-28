<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="proses_login.php">
    Username: <input type="text" name="username" required> <br><br>
    Password: <input type="password" name="password" required> <br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>