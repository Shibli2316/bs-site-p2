<?php

// Unset all session variables
$_SESSION = [];

// Destroy the session
if (session_id() !== "") {
    session_destroy();
}

// Clear the session cookie (for extra security)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

// Redirect the user to the home page
header("Location: ../index.php");
exit;
?>
