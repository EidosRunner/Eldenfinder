<section class="item-page">
    <div class="item-info">
        <h1><?= $item['label'] ?></h1>
        <p class="item-label"><?= $item['label'] ?></p>
        <p class="item-desc"><?= $item['short_description'] ?></p>
        <ol class="item-stats">
    <li><span>Degat de base :</span> <?= $item['base_damage'] ?></li>
    <li><span>Poids :</span> <?= $item['weight'] ?></li>
    <li><span>Skill :</span> <?= $item['skill'] ?></li>
    <li><span>Materiaux d'amelioration :</span> <?= $item['upgrade material'] ?></li>
</ol>
    </div>
    <div class="item-img">
        <img src="<?= $item['main_image'] ?>" alt="item image">
    </div>
</section>