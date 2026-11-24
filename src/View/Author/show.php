<?php
// src/View/Author/show.php
// Variables disponibles : $author (un auteur), $book (ses livres)
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($author['name']) ?></title>
</head>

<body>
    <h1><?= htmlspecialchars($author['name']) ?></h1>
    <p><?= htmlspecialchars($author['biography']) ?></p>

    <h2>Livres</h2>
    <?php if (empty($book)): ?>
        <p>Cet auteur n'a aucun livre.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($book as $b): ?>
                <li>
                    <a href="index.php?page=book&id=<?= (int) $b['id'] ?>">
                        <?= htmlspecialchars($b['title']) ?>
                    </a>
                    (<?= htmlspecialchars($b['published']) ?>, <?= (int) $b['pages'] ?> pages)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>

</html>