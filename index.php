<?php
// fichiers de config
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

require_once DOCUMENT_ROOT . '/database/database.php';

// models
require_once DOCUMENT_ROOT . '/src/Models/Author.php';
require_once DOCUMENT_ROOT . '/src/Models/book.php';

// controllers 
require_once DOCUMENT_ROOT . '/src/Controller/Author.php';
require_once DOCUMENT_ROOT . '/src/Controller/book.php';


// get params
$page = $_GET["page"] ?? "";

// router
match ($page) {
    "", "home" => book_ctrl($pdo),
    "book" => book_ctrl($pdo),
    "author" => author_ctrl($pdo),
    default => book_ctrl($pdo)
};




