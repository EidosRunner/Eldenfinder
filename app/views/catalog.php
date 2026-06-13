<div class="catalog-grid">
<?php
        foreach($items as $items){   
        ?>
            <article>
            <a href="/item/show/<?= $items['id'] ?>"> </a>
            <h1> <?= $items['slug'];?> </h1>
            <img src="<?= $items['main_image']; ?>" alt="">
            <p><?= $items['label'];?></p>
            <ol>
                
                <li></li>
            </ol>


        </article>  
        <?php } ?>

</div>