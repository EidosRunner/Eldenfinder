<h1>Mes favoris</h1>
 
<?php if (empty($items)): ?>
    <p class="empty-message">Vous n'avez encore ajouté aucun favori.</p>
<?php else: ?>
<div class="catalog-grid">
<?php foreach($items as $item): ?>
<article>
    <a href="/item/show/<?= $item['id'] ?>">
        <h1><?= $item['slug'] ?></h1>
        <img src="<?= $item['main_image'] ?>" alt="">
        <p><?= $item['label'] ?></p>
        <ol>
            <li></li>
        </ol>
    </a>
    <a href="/favorite/remove/<?= $item['id'] ?>" class="card-star active">★</a>
</article>
<?php endforeach; ?>
</div>
<?php endif; ?>