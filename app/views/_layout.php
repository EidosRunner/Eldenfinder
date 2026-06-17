<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/css/catalog.css">
    <title>EldenFinder</title>
</head>
<body>

<header>
<div class="header-left">
        <a href="/">EldenFinder</a>
        <a href="/catalog">Lands between</a>
        <a href="/catalogdlc">SoTe</a>
    </div>
    <?php if (isset($_SESSION['user_id'])): ?>
        <div class="header-right">
        <a href="/favorite">favori</a>
        <a href="/user/logout">Déconnexion</a>
    </div>
    <?php else: ?>
        <div class="header-right">
        <a href="/user/login">Connexion</a>
        <a href="/user/signup">Inscription</a>
        </div>
    <?php endif; ?>
</header>

<main>
<?php echo $page_content; ?>
</main>

<footer>
    <address>
        <span>EldenFinder</span>
        <span>EldenFinder@gmail.com</span>
    </address>
    © <?php echo date('Y') ?>
</footer>

</body>
</html>