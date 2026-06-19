<?php
require __DIR__.'/../models/catalog.php';
require __DIR__.'/../models/favorite.php';

function catalog_index($pdo)
{
    $search = $_GET['search'] ?? '';
    $data['items'] = get_all_items($pdo, $search);
    $data['search'] = $search;
    $data['favorites'] = isset($_SESSION['user_id']) 
        ? array_column(get_favorites($pdo, $_SESSION['user_id']), 'id')
        : [];
    return render('app/views/catalog.php', $data);
}