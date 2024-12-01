<?php include '../include/header.php'; ?>

<?php if (!isset($_SESSION['user_id'])): ?>
    <?php header('Location: login.php'); exit; ?>
<?php endif; ?>

<h1>Dashboard</h1>
<p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
<ul>
    <li><a href="create.php">Create Content</a></li>
    <li><a href="manage.php">Manage Content</a></li>
</ul>

<?php include '../includes/footer.php'; ?>
