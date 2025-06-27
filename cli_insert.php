<?php
echo "Digite o título: ";
$title = trim(fgets(STDIN));

echo "Digite o conteúdo: ";
$content = trim(fgets(STDIN));

if (!preg_match('/^[\p{L}\p{N}\s]+$/u', $title)) {
    die("Título inválido.\n");
}

$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
$stmt = $db->prepare("INSERT INTO posts (title, content, created_at) VALUES (?, ?, NOW())");
$stmt->execute([$title, $content]);

echo "Post inserido com sucesso!\n";
