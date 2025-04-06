<ul>
    <?php foreach ($recentPosts as $recentPost): ?>
        <li><a href="/post?id=<?= $recentPost['id'] ?>"><?= $recentPost['title'] ?></a></li>
    <?php endforeach ?>
</ul>