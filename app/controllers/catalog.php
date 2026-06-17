<?php
require __DIR__.'/../models/catalog.php';
require __DIR__.'/../models/favorite.php';

function catalog_index($pdo)
{
    $data['items'] = get_all_items($pdo);
    $data['favorites'] = isset($_SESSION['user_id']) 
        ? array_column(get_favorites($pdo, $_SESSION['user_id']), 'id')
        : [];
    return render('app/views/catalog.php', $data);
}
