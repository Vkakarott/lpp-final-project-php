<?php
require 'db.php';
$title = trim($_POST['title']);
if (!preg_match('/^[\p{L}\p{N}\s]+$/u', $title)) {
    die('Título inválido. Use apenas letras, números e espaços.');
}
$content = trim($_POST['content']);
$content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $content);
$stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
$stmt->execute([$title, $content]);
header("Location: index.php");
exit;
