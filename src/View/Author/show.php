<?php
// Variables disponibles : $author (un auteur), $book (ses livres)
?>
<section>
    <p><?= htmlspecialchars((string) ($author['biography'] ?? '')) ?></p>

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
                    (<?= htmlspecialchars((string) ($b['published'] ?? '')) ?>, <?= (int) $b['pages'] ?> pages)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>