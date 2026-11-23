<?php

$title = $book['title'];
$heading = $book['title'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="header__container">
            <a href="index.php"><img src="./assets/img/open-book.svg" alt="logo livre"></a>
            <h1><?= htmlspecialchars($heading) ?></h1>
        </div>
    </header>
    <header>
        <h1><?= htmlspecialchars($book['title']) ?></h1>
    </header>
    <main>
        <section>
            <h2><?= htmlspecialchars($book['subtitle']) ?></h2>
            <h3><a href="author.php?id=<?= $book['author_id'] ?>"><i><?= htmlspecialchars($book['name']) ?></i></a></h3>
            <p><?= htmlspecialchars($book['description']) ?></p>
            <p>Édition <?= htmlspecialchars($book['publisher']) ?> | date <?= htmlspecialchars($book['published']) ?> | p. <?= htmlspecialchars($book['pages']) ?></p>
            <a href="<?= htmlspecialchars($book['website']) ?>">site internet</a>
        </section>
    </main>
    <footer class="footer">
        <p>&copy;<?= date('Y') ?></p>
        <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    </footer>
</body>
</html>