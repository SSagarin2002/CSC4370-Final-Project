<?php include '../include/header.php'; 
include '../db.php';             
?>


<?php if (!isset($_SESSION['user_id'])): ?>
    <?php header('Location: login.php'); exit; ?>
<?php endif; ?>
<?php
// Fetch the content ID
$id = $_GET['id'] ?? null;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("UPDATE content SET title = ?, description = ? WHERE id = ? AND user_id = ?");
    $stmt->execute([$title, $description, $id, $_SESSION['user_id']]);
    header('Location: manage.php');
    exit;
}

// Fetch content for editing
$stmt = $pdo->prepare("SELECT * FROM content WHERE id = ? AND user_id = ?");
$stmt->execute([$id, $_SESSION['user_id']]);
$item = $stmt->fetch();

if (!$item) {
    die("Content not found or you do not have permission to edit this content.");
}
?>

<form method="POST">
    <input type="text" name="title" value="<?php echo htmlspecialchars($item['title']); ?>" required>
    <textarea name="description" required><?php echo htmlspecialchars($item['description']); ?></textarea>
    <button type="submit">Update</button>
</form>
