<?php

define('DIR_ROOT', dirname(__DIR__));
define('DIR_PUBLIC', DIR_ROOT . '/public');
define('DIR_APP', DIR_ROOT . '/app');
define('DIR_VIEWS', DIR_APP . '/views');
define('DIR_CONTROLLERS', DIR_APP . '/controllers');

require_once DIR_CONTROLLERS . '/index.php';