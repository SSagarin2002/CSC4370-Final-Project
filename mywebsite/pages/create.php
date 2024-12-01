<?php include '../include/header.php'; ?>
<?php include '../db.php'; ?>

<?php if (!isset($_SESSION['user_id'])): ?>
    <?php header('Location: login.php'); exit; ?>
<?php endif; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO content (title, description, user_id) VALUES (?, ?, ?)");
    $stmt->execute([$title, $description, $user_id]);
    header('Location: manage.php');
    exit;
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Create</button>
</form>

<?php include '../includes/footer.php'; ?>
