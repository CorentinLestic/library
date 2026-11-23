<?php

declare(strict_types=1);

$dsn = 'sqlite:' . __DIR__ . '/../sql/db.sqlite';

$pdo = new PDO(
    $dsn,
    null,
    null,
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);