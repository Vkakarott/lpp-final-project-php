<?php
$pdo = new PDO('sqlite:data/blog.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
?>