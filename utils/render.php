<?php

declare(strict_types=1);

function render(string $template, array $data = []): void
{
    extract($data);

    ob_start();
    require DOCUMENT_ROOT . '/src/View/' . $template . '.php';
    $main = ob_get_clean();

    require DOCUMENT_ROOT . '/src/View/default.php';
}