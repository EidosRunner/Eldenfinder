<form method="GET" action="/catalog" class="search-form">
    <input type="text" name="search" placeholder="Rechercher un item..." value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Rechercher</button>
</form>

<div class="catalog-grid">
<?php foreach($items as $items): ?>
<article>
    <a href="/item/show/<?= $items['id'] ?>">
        <h1><?= $items['slug'] ?></h1>
        <img src="<?= $items['main_image'] ?>" alt="">
        <p><?= $items['label'] ?></p>
        <ol>
            <li></li>
        </ol>
    </a>
    <?php if (isset($_SESSION['user_id'])): ?>
        <?php if (in_array($items['id'], $favorites)): ?>
            <a href="/favorite/remove/<?= $items['id'] ?>" class="card-star active">★</a>
        <?php else: ?>
            <a href="/favorite/add/<?= $items['id'] ?>" class="card-star">☆</a>
        <?php endif; ?>
    <?php endif; ?>
</article>
<?php endforeach; ?>
</div>
