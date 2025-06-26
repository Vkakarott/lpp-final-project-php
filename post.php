<?php
require 'db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();
include 'header.php';
?>

<h1><?= htmlspecialchars($post['title']) ?></h1>
<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
<a href="index.php">← Back</a>

<?php include 'footer.php'; ?>
