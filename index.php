<?php
// fichiers de config
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

// models + controllers
// models
require_once DOCUMENT_ROOT . "/database/database.php";
require_once DOCUMENT_ROOT . "/models/links.php";
require_once DOCUMENT_ROOT . "/controllers/links.php";


// get params
$page = $_GET["page"] ?? "";

// router
match ($page) {
    "", "home" => book_ctrl(),
    "add" => author_ctrl(),
    default => book_ctrl()
};