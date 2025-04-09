<?php

function showError(int $code): void
{
    http_response_code($code);
    require_once DIR_VIEWS . "/errors/{$code}.tpl.php";
    die;
}

function validateText(string $text): string
{
    return htmlspecialchars(trim($text), ENT_QUOTES);
}

function load(array $fillable, array $method): array
{
    $date = [];
    foreach ($method as $field => $value) {
        if (in_array($field, $fillable)) {
            $date[$field] = validateText($value);
        }
    }
    return $date;
}

function old(string $fieldName): string
{
    return isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName], ENT_QUOTES) : '';
}

function redirect(string $url = '/'): void 
{
    header("Location:{$url}");
    die;
}

function getAllerts(): void
{
    if (!empty($_SESSION['success'])) {
        require_once DIR_VIEWS . '/incs/alert_success.php';
        unset($_SESSION['success']);
    }

    if (!empty($_SESSION['error'])) {
        require_once DIR_VIEWS .'/incs/alert_error.php';
        unset($_SESSION['error']);
    }

}