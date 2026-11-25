<?php

function author_ctrl(): void
{
    $author_id = null;
    
    if(!empty($_GET['id']) && ctype_digit($_GET['id'])) {
        $author_id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    }
    
    if(!$author_id) {
        die("Vous devez définir un Auteurs valide");
    }
    
    $author = getAuthorById( $author_id);
    
    if(!$author) {
        http_response_code(404);
        die("Auteur introuvables (404)");
    }
    
    $book = getBooksByAuthor( $author_id);
    
    require_once DOCUMENT_ROOT . '/src/View/Author/show.php';

    }    

    
