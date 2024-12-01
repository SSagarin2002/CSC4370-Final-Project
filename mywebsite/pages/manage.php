<?php include '../include/header.php'; ?>
<?php include '../db.php'; ?>

<?php if (!isset($_SESSION['user_id'])): ?>
    <?php header('Location: login.php'); exit; ?>
<?php endif; ?>

<?php
$stmt = $pdo->prepare("SELECT * FROM content WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$content = $stmt->fetchAll();
?>

<h1>Manage Content</h1>
<ul>
    <?php foreach ($content as $item): ?>
        <li>
            <?php echo htmlspecialchars($item['title']); ?>
            <a href="edit.php?id=<?php echo $item['id']; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $item['id']; ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../includes/footer.php'; ?>
