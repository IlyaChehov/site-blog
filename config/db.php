<?php

return [
    'host' => 'database',
    'dbname' => 'docker',
    'username' => 'docker',
    'password' => 'docker',
    'charset' => 'utf8',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
];