<?php include '../include/header.php'; ?>

<h1>Welcome to my Website</h1>

<?php if (isset($_SESSION['user_id'])): ?>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! Welcome back!</p>
    <ul>
        <li><a href="/~ssagarin1/mywebsite/pages/dashboard.php">Dashboard</a></li>
        <li><a href="/~ssagarin1/mywebsite/pages/create.php">Create Content</a></li>
        <li><a href="/~ssagarin1/mywebsite/pages/manage.php">Manage Content</a></li>
        <li><a href="/~ssagarin1/mywebsite/pages/logout.php">Logout</a></li>
    </ul>
<?php else: ?>
    <p>Please <a href="/~ssagarin1/mywebsite/pages/login.php">log in</a> or <a href="/~ssagarin1/mywebsite/pages/register.php">register</a> to access more features.</p>
<?php endif; ?>

<?php include '../includes/footer.php'; ?>
