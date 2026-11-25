<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? 'Livres') ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="header__container">
            <a href="index.php"><img src="./assets/img/open-book.svg" alt="logo livre"></a>
        </div>
    </header>
    <main>
        <?= $main ?>
    </main>
    <footer class="footer">
        <p>&copy;<?= date('Y') ?></p>
    </footer>
</body>
</html>
