<?php

declare(strict_types=1);

// fichiers de config
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once DOCUMENT_ROOT . '/database/database.php'; // crée $pdo

// models
require_once DOCUMENT_ROOT . '/src/Models/Author.php';
require_once DOCUMENT_ROOT . '/src/Models/book.php';

// controllers
require_once DOCUMENT_ROOT . '/src/Controller/Author.php';
require_once DOCUMENT_ROOT . '/src/Controller/book.php';

// get params
$page = $_GET['page'] ?? '';

// router
match ($page) {
    '', 'home' => book_list_ctrl(),
    'book'     => book_ctrl(),
    'author'   => author_ctrl(),
    default    => book_list_ctrl(),
};