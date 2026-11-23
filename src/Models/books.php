<?php

declare(strict_types=1);

function getAllBooks(PDO $pdo): array
{
    $stmt = $pdo->query('
        SELECT b.*, a.name AS author_name
        FROM books b
        INNER JOIN authors a ON b.author_id = a.id
        ORDER BY b.title ASC
    ');
    return $stmt->fetchAll();
}

function getBookById(PDO $pdo, int $id): ?array
{
    $stmt = $pdo->prepare('
        SELECT b.*, a.name AS author_name
        FROM books b
        INNER JOIN authors a ON b.author_id = a.id
        WHERE b.id = ?
    ');
    $stmt->execute([$id]);
    return $stmt->fetch() ?: null;
}

function deleteBook(PDO $pdo, int $id): void
{
    $stmt = $pdo->prepare('DELETE FROM books WHERE id = ?');
    $stmt->execute([$id]);
}