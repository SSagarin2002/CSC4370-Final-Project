<?php
if (session_status() === PHP_SESSION_NONE) {
    // Set secure session parameters
    ini_set('session.use_only_cookies', 1); // Use cookies only for session ID
    ini_set('session.cookie_secure', 0);    // Enable if using HTTPS
    ini_set('session.cookie_httponly', 1);  // Prevent access to session cookie via JavaScript
    ini_set('session.cookie_lifetime', 0);  // Session expires on browser close
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="/~ssagarin1/mywebsite/assets/styles.css">
</head>
<body>
<nav>
    <ul>
        <!-- Link to the Homepage -->
        <li><a href="/~ssagarin1/mywebsite/pages/home.php">Home</a></li>
        <li><a href="/~ssagarin1/mywebsite/pages/about.php">About</a></li>
        <li><a href="/~ssagarin1/mywebsite/pages/contact.php">Contact info</a></li>
		<li><a href="/~ssagarin1/mywebsite/pages/database.php">Database</a></li>
		
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Links for Logged-in Users -->
            <li><a href="/~ssagarin1/mywebsite/pages/dashboard.php">Dashboard</a></li>
            <li><a href="/~ssagarin1/mywebsite/pages/create.php">Create Content</a></li>
            <li><a href="/~ssagarin1/mywebsite/pages/manage.php">Manage Content</a></li>
            <li><a href="/~ssagarin1/mywebsite/pages/logout.php">Logout</a></li>
            <li>Currently you are logged in as: <?php echo htmlspecialchars($_SESSION['username']); ?></li>
        <?php else: ?>
            <!-- Links for Guests -->
            <li><a href="/~ssagarin1/mywebsite/pages/login.php">Login</a></li>
            <li><a href="/~ssagarin1/mywebsite/pages/register.php">Register</a></li>
            <li>Currently you are not logged in</li>
        <?php endif; ?>
    </ul>
</nav>
