<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EldenFinder</title>
</head>
<body>
    <?php 
    foreach($items as $items){   
    ?>
        <article>
        <h1> <?= $items['slug'];?> </h1>
        <img src="<?= $items['main_image']; ?>" alt="item image">
        <p><?= $items['label'];?></p>
        <p> description: <?= $items['short_description']; ?></p>
        <ol>
            <li>weapon category: <?= $items['category_id']; ?></li>
            <li> weapon skill: <?= $items['skill']; ?></li>
            <li> weapon skill cost: <?= $items['skill_fp_cost']; ?></li>
            <li> weapon weight: <?= $items['weight']; ?></li>
            
            <li></li>
        </ol>

        <p>upgrade material <?= $items['upgrade_material']; ?></p>

  <?php } ?>
    </article>

    
</body>
</html>