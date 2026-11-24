<?php

declare(strict_types=1);

function getAllBooks(): array
{
    global $pdo;

    $stmt = $pdo->query('
        SELECT b.*, a.name AS author_name
        FROM books b
        INNER JOIN authors a ON b.author_id = a.id
        ORDER BY b.title ASC
    ');
    return $stmt->fetchAll();
}

function getBookById(int $id): ?array
{
    global $pdo;

    $stmt = $pdo->prepare('
        SELECT b.*, a.name AS author_name
        FROM books b
        INNER JOIN authors a ON b.author_id = a.id
        WHERE b.id = ?
    ');
    $stmt->execute([$id]);
    return $stmt->fetch() ?: null;
}

function deleteBook(int $id): void
{
    global $pdo;

    $stmt = $pdo->prepare('DELETE FROM books WHERE id = ?');
    $stmt->execute([$id]);
}