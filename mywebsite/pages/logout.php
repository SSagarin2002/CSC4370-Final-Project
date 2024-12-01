<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Destroy the session
session_unset();  // Clear all session variables
session_destroy(); // Destroy the session data on the server

// Redirect to the homepage
header('Location: home.php');
exit;
?>
