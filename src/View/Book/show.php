<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des livres</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__container">
            <a href="index.php"><img src="./assets/img/open-book.svg" alt="logo livre"></a>
            <h1>Liste des livres</h1>
        </div>
    </header>
    <main>
        <section>
            <?php if (empty($books)): ?>
                <p>Aucun livre pour le moment.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($books as $book): ?>
                        <li>
                            <a href="index.php?page=book&id=<?= (int) $book['id'] ?>">
                                <?= htmlspecialchars($book['title']) ?>
                            </a>
                            <i>
                                par
                                <a href="index.php?page=author&id=<?= (int) $book['author_id'] ?>">
                                    <?= htmlspecialchars($book['author_name']) ?>
                                </a>
                            </i>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </main>

    <footer class="footer">
        <p>&copy;<?= date('Y') ?></p>
        <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a
                href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    </footer>
</body>

</html>