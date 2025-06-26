<?php
require 'db.php';
$posts = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll();
?>
<h1>Mini Blog</h1>
<a href="create.php">New Post</a>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="post.php?id=<?= $post['id'] ?>">
                <?= htmlspecialchars($post['title']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>