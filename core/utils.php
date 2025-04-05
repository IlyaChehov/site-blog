<?php

function showError(int $code): void
{
    http_response_code($code);
    require_once DIR_VIEWS . "/errors/{$code}.tpl.php";
    die;
}