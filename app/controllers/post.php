<?php

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts WHERE id = ?", [$id])->findOrFail();
$recentPosts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

$title = "Главная | {$post['title']}";

require_once DIR_VIEWS . '/post.tpl.php';
