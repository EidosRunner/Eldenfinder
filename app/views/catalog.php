<div class="catalog-grid">
<?php
        foreach($items as $items){   
        ?>
            <article>
            <a href="/item/show/<?= $items['id'] ?>">
            <h1> <?= $items['slug'];?> </h1>
            <img src="<?= $items['main_image']; ?>" alt="item image">
            <p><?= $items['label'];?></p>
            <ol>
                
                <li></li>
            </ol>


        </article>  
        <?php } ?>
</div>
