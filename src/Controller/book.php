<?php 

function book_ctrl(PDO $pdo): void
{
    $book_id = null;
    
    if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
        $book_id = (int) filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    }
    
    if (!$book_id) {
        die("Vous devez définir un paramère id valide dans l'url");
    }
    
    $book = getBookById($pdo, $book_id);
    
    if(!$book) {
        http_response_code(404);
        die("Livre introuvable (404)");
    }
    
    require __DIR__ . '/../View/book/show.php';

}




