<?php

$title = 'Создать пост | Мой блог';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fillable = ['title', 'excerpt', 'content'];

    $data = load($fillable, $_POST);

    $errors = [];

    if (empty($data['title'])) {
        $errors['title'] = 'Заголовок поста не должен быть пустым!';
    }

    if (empty($data['excerpt'])) {
        $errors['excerpt'] = 'Краткое описание поста не должно быть пустым!';
    }

    if (empty($data['content'])) {
        $errors['content'] = 'Содержание поста не должно быть пустым!';
    }

    if (empty($errors)) {
        echo 'true';
    }
}

require_once DIR_VIEWS . '/post-create.tpl.php';