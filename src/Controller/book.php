<?php

declare(strict_types=1);

function book_ctrl(): void
{
    $book_id = null;

    if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
        $book_id = (int) $_GET['id'];
    }

    if (!$book_id) {
        http_response_code(400);
        die("Vous devez définir un paramètre id valide dans l'url");
    }

    $book = getBookById($book_id);

    if (!$book) {
        http_response_code(404);
        die("Livre introuvable (404)");
    }

    $title = $book['title'];

    renderView('book/show', compact('book', 'title'));
}

function book_list_ctrl(): void
{
    $books = getAllBooks();
    $title = 'Liste des livres';

    renderView('book/list', compact('books', 'title'));
}