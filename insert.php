<?php
require 'db.php';

$title = trim($_POST['title']);
if (!preg_match('/^[\p{L}\p{N}\s]+$/u', $title)) {
    echo "<script>alert('Título inválido. Use apenas letras, números e espaços.'); window.history.back();</script>";
    exit;
}

$content = trim($_POST['content']);
$content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $content);

$stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
$stmt->execute([$title, $content]);

header("Location: index.php");
exit;
