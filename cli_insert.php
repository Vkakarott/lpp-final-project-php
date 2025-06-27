<?php
echo "Digite o título: ";
$title = trim(fgets(STDIN));

echo "Digite o conteúdo: ";
$content = trim(fgets(STDIN));

if (!preg_match('/^[\p{L}\p{N}\s]+$/u', $title)) {
    die("Título inválido.\n");
}

$db = new PDO('sqlite:data/blog.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $db->prepare("INSERT INTO posts (title, content, created_at) VALUES (?, ?, datetime('now'))");
$stmt->execute([$title, $content]);

$file = new SplFileObject('backup_posts.txt', 'a');
$file->fwrite("Título: $title\nConteúdo: $content\n---\n");

echo "Post inserido com sucesso!\n";
