<?php
$title = 'Главная | Мой блог';

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
$recentPosts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->fetchAll();

require_once DIR_VIEWS . '/index.tpl.php';