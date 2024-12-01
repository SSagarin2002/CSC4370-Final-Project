<?php

$baseUrl = "/~ssagarin1/mywebsite";

if (isset($_SESSION['user_id'])) {
    header("Location: $baseUrl/pages/dashboard.php"); 
} else {
    header("Location: $baseUrl/pages/home.php"); 
}

exit;
?>
