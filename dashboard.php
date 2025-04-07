<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
<p>Your role is: <?= htmlspecialchars($_SESSION['role']) ?></p>
<p><a href="logout.php">Logout</a></p>
