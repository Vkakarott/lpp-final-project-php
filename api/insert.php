<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

if (!$data || !isset($data['title'], $data['content'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Dados inválidos ou incompletos.']);
    exit;
}

$title = trim($data['title']);
$content = trim($data['content']);

if (!preg_match('/^[\p{L}\p{N}\s]+$/u', $title)) {
    http_response_code(422);
    echo json_encode(['error' => 'Título inválido. Use apenas letras, números e espaços.']);
    exit;
}

$content = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $content);

try {
    $db = new PDO('sqlite:' . dirname(__DIR__) . '/data/blog.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("INSERT INTO posts (title, content, created_at) VALUES (?, ?, datetime('now'))");
    $stmt->execute([$title, $content]);

    echo json_encode(['success' => true, 'message' => 'Post inserido com sucesso.']);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Erro ao inserir post.', 'details' => $e->getMessage()]);
}
