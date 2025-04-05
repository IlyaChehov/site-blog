<?php

define('DIR_ROOT', dirname(__DIR__));
define('DIR_PUBLIC', DIR_ROOT . '/public');
define('DIR_APP', DIR_ROOT . '/app');
define('DIR_CORE', DIR_ROOT . '/core');
define('DIR_VIEWS', DIR_APP . '/views');
define('DIR_CONTROLLERS', DIR_APP . '/controllers');
require_once DIR_CORE . '/utils.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

switch ($uri) {
    case '':
        require_once DIR_CONTROLLERS . '/index.php';
        break;
    case 'about.php':
        require_once DIR_CONTROLLERS . '/about.php';
        break;
    default:
        showError(404);
        break;
};
