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