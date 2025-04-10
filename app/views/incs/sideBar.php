<ul>
    <?php foreach ($recentPosts as $recentPost): ?>
        <li><a href="/posts?id=<?= $recentPost['id'] ?>"><?= $recentPost['title'] ?></a></li>
    <?php endforeach ?>
</ul>