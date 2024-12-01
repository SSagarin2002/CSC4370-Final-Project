<?php include '../include/header.php'; 
include '../db.php';             
?>


<?php if (!isset($_SESSION['user_id'])): ?>
    <?php header('Location: login.php'); exit; ?>
<?php endif; ?>
<?php
$id = $_GET['id'] ?? null;

// Delete the content if it belongs to the logged-in user
$stmt = $pdo->prepare("DELETE FROM content WHERE id = ? AND user_id = ?");
$stmt->execute([$id, $_SESSION['user_id']]);

header('Location: manage.php');
exit;
?>