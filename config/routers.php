<?php

/**
 * @var $router
 */

$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');
$router->post('posts', 'posts/store.php');
$router->delete('posts', 'posts/delete.php');
$router->get('posts/create', 'posts/create.php');

$router->get('about', 'about.php');
$router->get('contact', 'contact.php');
