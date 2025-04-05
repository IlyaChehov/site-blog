<?php
require_once DIR_VIEWS . '/incs/head.php';
require_once DIR_VIEWS . '/incs/header.php';
?>

<main>
    <div class="container">
        <div class="content-wrapper">
            <section class="posts">
                <h2>Последние записи</h2>

                <?php foreach ($posts as $post): ?>
                    <article class="post-card">
                        <h3><a href="#"><?= $post['title'] ?></a></h3>
                        <div class="post-meta">
                            <span class="date"><?= $post['date'] ?></span>
                        </div>
                        <p class="post-excerpt"><?= $post['description'] ?></p>
                        <a href="#" class="read-more">Читать дальше</a>
                    </article>
                <?php endforeach ?>

            </section>

            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h3>О блоге</h3>
                    <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.</p>
                </div>
                <div class="sidebar-widget recent-posts">
                    <h3>Недавние записи</h3>
                    <?php require_once DIR_VIEWS . '/incs/sideBar.php' ?>
                </div>

                <div class="sidebar-widget">
                    <h3>Категории</h3>
                    <ul class="categories">
                        <li><a href="#">HTML <span>(3)</span></a></li>
                        <li><a href="#">CSS <span>(5)</span></a></li>
                        <li><a href="#">JavaScript <span>(2)</span></a></li>
                        <li><a href="#">Веб-дизайн <span>(4)</span></a></li>
                        <li><a href="#">Советы <span>(1)</span></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php require_once DIR_VIEWS . '/incs/footer.php' ?>