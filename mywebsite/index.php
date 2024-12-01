<?php

// Define the base URL of your website
$baseUrl = "/~ssagarin1/mywebsite";

// Redirect users based on their logged-in status
if (isset($_SESSION['user_id'])) {
    header("Location: $baseUrl/pages/dashboard.php"); // Logged-in users go to the dashboard
} else {
    header("Location: $baseUrl/pages/home.php"); // Guests go to the home page
}

// Exit to ensure no further processing
exit;
?>
