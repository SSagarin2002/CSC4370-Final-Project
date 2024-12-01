<?php include '../include/header.php'; 
include '../db.php';             
?>


<?php if (!isset($_SESSION['user_id'])): ?>
    <?php header('Location: login.php'); exit; ?>
<?php endif; ?>
<?php
$id = $_GET['id'] ?? null;

$stmt = $pdo->prepare("DELETE FROM content WHERE id = ? AND user_id = ?");
$stmt->execute([$id, $_SESSION['user_id']]);

header('Location: manage.php');
exit;
?>
