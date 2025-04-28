<?php
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Hapus cookie session (opsional untuk keamanan ekstra)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect ke login
header("Location: login.php");
exit();
?>