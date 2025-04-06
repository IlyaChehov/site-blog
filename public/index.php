<?php

require_once dirname(__DIR__) . '/config/constants.php';

require_once DIR_CORE . '/utils.php';
require_once DIR_CORE . '/classes/Db.php';

$db_config = require_once DIR_CONFIG . '/db.php';
$db = new Db($db_config);

require_once DIR_CORE . '/router.php';

