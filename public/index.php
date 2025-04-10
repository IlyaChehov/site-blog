<?php

use Core\Classes\Db;
use Core\Classes\Router;

session_start();

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/config/constants.php';
require_once DIR_CORE . '/utils.php';

$db_config = require_once DIR_CONFIG . '/db.php';
$db = (Db::getInctance())->getConnection($db_config);

$router = new Router();
require_once DIR_CONFIG . '/routers.php';

$router->match();