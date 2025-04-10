<?php

global $db;

use Core\Classes\Validator;

$title = 'Создать пост | Мой блог';

$fillable = ['title', 'excerpt', 'content'];

$data = load($fillable, $_POST);

$validator = new Validator();

$rules = [
    'title' => [
        'required' => true,
        'min' => 1,
        'max' => 255
    ],
    'excerpt' => [
        'required' => true,
        'min' => 1,
    ],
    'content' => [
        'required' => true,
        'min' => 1
    ],
];

$validation = $validator->validate($data, $rules);

$errors = $validator->getErrors();

$errTitle = $validator->listErrors('title');
$errExcerpt = $validator->listErrors('excerpt');
$errContent = $validator->listErrors('content');

if ($validator->hasErrors()) {
    if ($db->query("INSERT INTO posts (`title`, `content`, `excerpt`, `published_at`) VALUES (:title, :content, :excerpt, NOW())", $data)) {
        $_SESSION['success'] = 'Пост создан!';
        redirect('/');
    } else {
        $_SESSION['error'] = 'Ошибка записи в базу данных!';
        redirect('posts/create');
    }
} else {
    require_once DIR_VIEWS . '/posts/create.tpl.php';
}
