<?php
$title = 'О блоге | Мой блог';

$recentPosts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->fetchAll();

require_once DIR_VIEWS . '/about.tpl.php';