<?php
require_once DIR_VIEWS . '/incs/head.php';
require_once DIR_VIEWS . '/incs/header.php';
?>

<main>
    <div class="container">
        <div class="content-wrapper">
            <section class="post-full">
                <h1 id="post-title"><?= $post['title'] ?></h1>
                <div class="post-meta">
                    <span class="date" id="post-date"><?= $post['published_at'] ?></span>
                </div>
                <div class="post-content" id="post-content">
                    <p><?= $post['content'] ?></p>
                </div>
            </section>

            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h3>О блоге</h3>
                    <p>Блог о разработке и веб-дизайне. Здесь я делюсь своими знаниями и опытом в сфере веб-разработки.</p>
                    <a href="about" class="read-more">Подробнее о блоге</a>
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