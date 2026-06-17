<?php
require __DIR__.'/../models/item.php';
require __DIR__.'/../models/favorite.php';

function item_show($pdo, $id)
{
    $data['item'] = get_item_by_id($pdo, $id);
    $data['is_favorite'] = isset($_SESSION['user_id']) 
        ? is_favorite($pdo, $_SESSION['user_id'], $id) 
        : false;
    return render('app/views/item.php', $data);
}