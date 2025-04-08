<?php

function showError(int $code): void
{
    http_response_code($code);
    require_once DIR_VIEWS . "/errors/{$code}.tpl.php";
    die;
}

function load(array $fillable, array $method): array
{
    $date = [];
    foreach ($method as $field => $value) {
        if (in_array($field, $fillable)) {
            $date[$field] = $value;
        }
    }
    return $date;
}