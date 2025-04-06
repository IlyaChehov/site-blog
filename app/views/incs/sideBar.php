<ul>
    <?php foreach ($recentPosts as $recentPost): ?>
        <li><a href="/posts/<?= $recentPost['slug'] ?>"><?= $recentPost['title'] ?></a></li>
    <?php endforeach ?>
</ul>