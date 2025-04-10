<?php

global $db;

$title = 'Главная | Мой блог';

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->findAll();
$recentPosts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once DIR_VIEWS . '/posts/index.tpl.php';