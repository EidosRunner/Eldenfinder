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
        <img src="" alt="item image">
        <p><?= $items['label'];?></p>
        <p><?= $items[''];?></p>
        <ol>
            <li><?php  ?></li>
            <li><?php  ?></li>
            <li><?php  ?></li>
            <li><?php  ?></li>
            <li><?php  ?></li>
        </ol> 
    </article>
    <?php
    }    
    ?>

    
</body>
</html>