<?php

declare(strict_types=1);

function getAuthorById( int $id): ?array 
{
    global $pdo;
    
    $stmt = $pdo->prepare('SELECT * FROM authors WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch() ?: null;
}

function getBooksByAuthor( int $id): array
{
    global $pdo;

    $stmt = $pdo->prepare('
        SELECT b.*, a.name AS author_name
        FROM books b
        INNER JOIN authors a ON b.author_id = a.id
        WHERE b.author_id = ?
        ORDER BY b.title ASC
    ');
    $stmt->execute([$id]);
    return $stmt->fetchAll();
}