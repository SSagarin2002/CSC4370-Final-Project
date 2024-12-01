<?php include '../include/header.php'; ?>


<?php
include '../db.php';      

try {
    $stmt = $pdo->prepare("SELECT title, description FROM content ORDER BY created_at DESC");
    $stmt->execute();
    $content = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error fetching content: " . $e->getMessage());
}
?>

    <h1>All Content</h1>
    <p>Below is a list of all content created by users:</p>

    <ul>
        <?php if (!empty($content)): ?>
            <?php foreach ($content as $item): ?>
                <li>
                    <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                    <p><?php echo nl2br(htmlspecialchars($item['description'])); ?></p>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No content available at the moment.</p>
        <?php endif; ?>
    </ul>

<?php include '../includes/footer.php'; ?>
