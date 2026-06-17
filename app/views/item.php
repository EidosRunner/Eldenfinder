<section class="item-page">
    <div class="item-info">
        <h1><?= $item['slug'] ?></h1>
        <p class="item-desc"><?= $item['short_description'] ?></p>
        <ol class="item-stats">
            <li><span>Skill</span><?= $item['skill'] ?></li>
            <li><span>Skill fp cost</span><?= $item['skill FP cost'] ?></li>
            <li><span>Weight</span><?= $item['weight'] ?></li>
            <li><span>Upgrade</span><?= $item['upgrade material'] ?></li>
        </ol>

        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($is_favorite): ?>
                <a href="/favorite/remove/<?= $item['id'] ?>" class="btn-favorite active">★ Retirer des favoris</a>
            <?php else: ?>
                <a href="/favorite/add/<?= $item['id'] ?>" class="btn-favorite">☆ Ajouter aux favoris</a>
            <?php endif; ?>
        <?php else: ?>
            <a href="/user/login" class="btn-favorite">Connectez-vous pour ajouter aux favoris</a>
        <?php endif; ?>
    </div>
    <div class="item-img">
        <img src="<?= $item['main_image'] ?>" alt="">
    </div>
</section>