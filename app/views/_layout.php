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
    <a href="/">EldenFinder</a>
    <a href="/catalog">Lands between</a>
    <a href="/catalogdlc">SoTe</a>
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