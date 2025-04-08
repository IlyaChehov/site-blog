<?php
require_once DIR_VIEWS . '/incs/head.php';
require_once DIR_VIEWS . '/incs/header.php';
?>


<main class="main">
    <div class="container">
        <div class="content-wrapper">
            <section class="post-card post-card-form">
                <h2>Создать новую запись</h2>
                <form class="post-form" action="#" method="POST">
                    <div class="form-group <?php echo isset($errors['title']) ? 'error' : ''; ?>">
                        <label for="post-title">Заголовок поста</label>
                        <input type="text"
                            id="post-title"
                            name="title"

                            placeholder="Введите заголовок..."
                            class="form-control"
                            value="<?= $data['title'] ?? '' ?>">
                        <div class="error-message">
                            <?= $errors['title'] ?? '' ?>
                        </div>
                    </div>

                    <div class="form-group <?php echo isset($errors['excerpt']) ? 'error' : ''; ?>">
                        <label for="post-content">Краткое описание поста</label>
                        <textarea id="post-content"
                            name="excerpt"
                            rows="3"

                            placeholder="Начните писать здесь..."
                            class="form-control"><?= $data['excerpt'] ?? '' ?></textarea>
                        <div class="error-message">
                            <?= $errors['excerpt'] ?? '' ?>
                        </div>
                    </div>

                    <div class="form-group <?php echo isset($errors['content']) ? 'error' : ''; ?>">
                        <label for="post-content">Содержание поста</label>
                        <textarea id="post-content"
                            name="content"
                            rows="12"

                            placeholder="Начните писать здесь..."
                            class="form-control"><?= $data['content'] ?? '' ?></textarea>
                        <div class="error-message">
                            <?= $errors['content'] ?? '' ?>
                        </div>
                    </div>

                    <!-- <div class="form-group <?php echo isset($errors['image']) ? 'error' : ''; ?>">
                        <label for="post-image">Загрузить изображение</label>
                        <input type="file"
                            id="post-image"
                            name="image"
                            accept="image/*"
                            class="form-control">
                        <div class="error-message">
                            
                        </div>
                    </div> -->

                    <div class="form-actions">
                        <button type="submit" class="submit-btn">Опубликовать</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>

<?php require_once DIR_VIEWS . '/incs/footer.php' ?>